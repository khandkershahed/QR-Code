<?php

namespace App\Http\Controllers\Subscription;


use App\Models\Admin\Plan;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Stripe\Exception\ApiErrorException;

class SubscriptionController extends Controller
{
    public function index()
    {
        try {
            $subscriptions = Subscription::with('plan', 'user')->get();
            $subscriptionsWithInvoices = [];

            foreach ($subscriptions as $subscription) {
                if ($subscription->user) {
                    $invoices = $subscription->user->invoices();
                    $subscriptionsWithInvoices[] = [
                        'subscription' => $subscription,
                        'invoices' => $invoices,
                    ];
                } else {
                    $subscriptionsWithInvoices[] = [
                        'subscription' => $subscription,
                        'invoices' => collect(),
                    ];
                }
            }

            $data['subscriptionsWithInvoices'] = $subscriptionsWithInvoices;

            return view('admin.pages.user-subscription.index', $data);
        } catch (\Exception $e) {
            // Log error and show an appropriate message to the user
            Session::flash('error',$e->getMessage());
            return redirect()->back();
        }
    }

    public function showSubscriptionForm()
    {
        try {
            $data = [
                'monthly_plans' => Plan::orderBy('price', 'asc')->where('billing_cycle', 'monthly')->get(),
                'yearly_plans' => Plan::orderBy('price', 'asc')->where('billing_cycle', 'yearly')->get(),
            ];
            return view('frontend.pages.subscription_plan', $data);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['message' => 'Error showing subscription plans.']);
        }
    }

    public function subscribe(Request $request, $id)
    {
        try {
            $data['plan'] = Plan::where('slug', $id)->firstOrFail();
            $data['intent'] = auth()->user()->createSetupIntent();
            return view("user.pages.subscription.subscribe", $data);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['message' => 'Error fetching subscription details.']);
        }
    }

    public function subscription(Request $request)
    {
        $this->validate($request, [
            'plan' => 'required|exists:plans,id',
            'token' => 'required|string',
        ]);

        try {
            $plan = Plan::findOrFail($request->plan);

            // Check if the user already has an active subscription
            $existingSubscription = $request->user()->subscription('default');
            if ($existingSubscription && $existingSubscription->active()) {
                return redirect()->back()->withErrors(['message' => 'You already have an active subscription.']);
            }

            $subscription = $request->user()->newSubscription($plan->slug, $plan->stripe_plan)->create($request->token);
            $request->user()->syncStripePlan();

            return view("frontend.pages.subscription_success");
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['message' => 'Error creating subscription.']);
        }
    }

    public function cancelSubscription(Request $request)
    {
        try {
            $user = $request->user();

            if ($user->subscription('default')) {
                $user->subscription('default')->cancel();
            }

            return redirect()->route('home')->with('success', 'Subscription canceled!');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['message' => 'Error canceling subscription.']);
        }
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function retrievePlans()
    {
        try {
            $key = \config('services.stripe.secret');
            $stripe = new \Stripe\StripeClient($key);
            $plansraw = $stripe->plans->all();
            $plans = $plansraw->data;

            foreach ($plans as $plan) {
                $prod = $stripe->products->retrieve($plan->product, []);
                $plan->product = $prod;
            }
            return $plans;
        } catch (ApiErrorException $e) {
            return [];
        }
    }

    public function showSubscription()
    {
        try {
            $plans = $this->retrievePlans();
            $user = Auth::user();

            return view('seller.pages.subscribe', [
                'user' => $user,
                'intent' => $user->createSetupIntent(),
                'plans' => $plans
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['message' => 'Error showing subscription page.']);
        }
    }

    public function processSubscription(Request $request)
    {
        $this->validate($request, [
            'payment_method' => 'required|string',
            'plan' => 'required|string',
        ]);

        $user = Auth::user();
        $paymentMethod = $request->input('payment_method');
        $plan = $request->input('plan');

        try {
            $user->createOrGetStripeCustomer();
            $user->addPaymentMethod($paymentMethod);

            // Check if the user already has an active subscription
            $existingSubscription = $user->subscription('default');
            if ($existingSubscription && $existingSubscription->active()) {
                return back()->withErrors(['message' => 'You already have an active subscription.']);
            }

            $user->newSubscription('default', $plan)->create($paymentMethod, [
                'email' => $user->email
            ]);
        } catch (\Exception $e) {
            return back()->withErrors(['message' => 'Error creating subscription. ' . $e->getMessage()]);
        }

        return redirect('dashboard');
    }
}
