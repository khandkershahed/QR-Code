<?php

namespace App\Http\Controllers\Subscription;

use Stripe\Plan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Plan as ModelPlan;
use Illuminate\Support\Facades\Validator;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.pages.plans.index', [
            'plans' => ModelPlan::latest('id')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.plans.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'price' => 'required|integer|min:1',
            'currency' => 'required|string',
            'billing_cycle' => 'required|string|in:day,week,month,year',
            'interval' => 'required|integer|min:1',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Determine interval_count based on billing cycle
        $interval_count = 1; // Default to 1 for day or week billing cycles
        if ($request->billing_cycle == 'month') {
            $interval_count = 12; // If billing cycle is month, set interval_count to 12
        } elseif ($request->billing_cycle == 'year') {
            $interval_count = 1; // If billing cycle is year, set interval_count to 1
        }

        // Create the Stripe Plan using the Stripe API
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        try {
            $plan = \Stripe\Plan::create([
                'amount' => $request->price * 100, // Amount should be in cents
                'currency' => $request->currency,
                'interval' => $request->billing_cycle,
                'interval_count' => $interval_count,
                'product' => [
                    'name' => $request->title,
                ],
            ]);
            // dd($plan);
            // Prepare data for local storage
            $data = $request->all();
            $data['stripe_plan'] = $plan->id;

            // Handle descriptions
            if ($request->has('descriptions')) {
                $data['descriptions'] = json_encode($request->input('descriptions'));
            } else {
                $data['descriptions'] = json_encode([]); // Set to empty array if not provided
            }

            // Store the plan in your local database
            ModelPlan::create($data);

            return redirect()->back()->with('success', 'Plan Created successfully');
        } catch (\Exception $e) {
            // Handle Stripe API errors
            return redirect()->back()->with('error', 'Error creating plan: ' . $e->getMessage());
        }
    }

    // public function store(Request $request)
    // {
    //     // Validate the request
    //     $validator = Validator::make(
    //         $request->all(),
    //         [
    //             'name' => 'required|string|max:255',
    //             'amount' => 'required|integer|min:1',
    //             'currency' => 'required|string',
    //             'billing_cycle' => 'required|string|in:day,week,month,year',
    //             'interval' => 'required|integer|min:1',
    //         ]
    //     );

    //     // Debug: Dump and die the request data
    //     if ($validator->fails()) {

    //         $messages = $validator->messages();
    //         foreach ($messages->all() as $message) {
    //             flash()->addError($message, 'Failed', ['timeOut' => 30000]);
    //         }
    //         return redirect()->back()->withInput();
    //     }

    //     \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

    //     try {
    //         // Create the product first
    //         $product = \Stripe\Product::create([
    //             'name' => $request->name,
    //         ]);
    //         dd($product);
    //         // Create the plan for the created product
    //         $plan = \Stripe\Plan::create([
    //             'amount' => $request->amount * 100, // Stripe expects the amount in cents
    //             'currency' => $request->currency,
    //             'interval' => $request->billing_cycle,
    //             'interval_count' => $request->interval,
    //             'product' => $product->id,
    //         ]);

    //         // Prepare data for local storage
    //         $data = $request->all();
    //         $data['stripe_plan'] = $plan->id;

    //         // Handle descriptions
    //         if ($request->has('descriptions')) {
    //             $data['descriptions'] = json_encode($request->input('descriptions'));
    //         } else {
    //             $data['descriptions'] = json_encode([]); // Set to empty array if not provided
    //         }

    //         // Store the plan in your local database
    //         ModelPlan::create($data);

    //         return redirect()->back()->with('success', 'Plan Created successfully');
    //     } catch (\Exception $e) {
    //         // Handle errors
    //         return redirect()->back()->with('error', 'Error creating plan: ' . $e->getMessage());
    //     }
    // }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.pages.plans.edit', ['plan' => ModelPlan::find($id)]);
    }

    /**
     * Update the specified resource
     *  in storage.
     */
    public function update(Request $request, string $id)
    {
        $plan = ModelPlan::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'price' => 'required|integer|min:1',
            'currency' => 'required|string|size:3', // Validate currency code length
            'billing_cycle' => 'required|string|in:day,week,month,year',
            'interval' => 'required|integer|min:1',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Set Stripe API key
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        try {

            // $stripe_plan = \Stripe\Plan::retrieve($plan->stripe_plan); // Replace with the ID of the plan to update
            // // dd($stripe_plan);
            // $stripe_plan->amount = $request->price * 100; // Update the amount (e.g., $15)
            // $stripe_plan->interval = $request->billing_cycle; // Update the interval (e.g., yearly)
            // $stripe_plan->currency = $request->currency; // Update the currency (e.g., euro)
            // $product = \Stripe\Product::update(
            //     $stripe_plan->product,
            //     ['name' => $request->title]
            // );
            // $stripe_plan->save();

            // Prepare data for local storage
            $data = $request->all();
            // Update local Stripe Plan ID

            // Handle descriptions
            if ($request->has('descriptions')) {
                $data['descriptions'] = json_encode($request->input('descriptions'));
            } else {
                $data['descriptions'] = json_encode([]); // Set to empty array if not provided
            }

            // Update the plan in your local database
            $plan->fill($data);
            $plan->save();

            return redirect()->back()->with('success', 'Plan updated successfully');
        } catch (\Stripe\Exception\ApiErrorException $e) {
            // Handle Stripe API errors
            return redirect()->back()->with('error', 'Error updating plan: ' . $e->getMessage());
        } catch (\Exception $e) {
            // Handle general errors
            return redirect()->back()->with('error', 'An unexpected error occurred: ' . $e->getMessage());
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ModelPlan::findOrFail($id)->delete();
    }
}
