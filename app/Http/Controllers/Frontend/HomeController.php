<?php

namespace App\Http\Controllers\Frontend;

use App\Models\BlogTag;
use App\Models\NfcScan;
use App\Models\BlogPost;
use App\Models\Admin\Faq;
use App\Models\Admin\Plan;
use Jenssegers\Agent\Agent;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use App\Models\Admin\NfcCard;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function homePage()
    {
        $data = [
            'qr_plans' => Plan::orderBy('price', 'asc')->where('type', 'qr')->get(),
            'nfc_plans' => Plan::orderBy('price', 'asc')->where('type', 'nfc')->get(),
            'barcode_plans' => Plan::orderBy('price', 'asc')->where('type', 'barcode')->get(),
        ];
        return view('frontend.pages.homePage', $data);
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }

    public function about()
    {
        return view('frontend.pages.about');
    }
    public function services()
    {
        $data = [
            'nfc_plans' => Plan::orderBy('price', 'asc')->where('type', 'nfc')->get(),
        ];
        return view('frontend.pages.services', $data);
    }
    public function userPricing()
    {
        $data = [
            'monthly_plans' => Plan::orderBy('price', 'asc')->where('billing_cycle', 'monthly')->get(),
            'yearly_plans' => Plan::orderBy('price', 'asc')->where('billing_cycle', 'yearly')->get(),
        ];
        return view('frontend.pages.userPricing', $data);
    }
    public function pricing()
    {
        $data = [
            'qr_plans' => Plan::orderBy('price', 'asc')->where('type', 'qr')->get(),
            'nfc_plans' => Plan::orderBy('price', 'asc')->where('type', 'nfc')->get(),
            'barcode_plans' => Plan::orderBy('price', 'asc')->where('type', 'barcode')->get(),
        ];
        return view('frontend.pages.resellerPricing', $data);
    }
    public function resellerPricing()
    {
        $data = [
            'monthly_plans' => Plan::orderBy('price', 'asc')->where('billing_cycle', 'monthly')->get(),
            'yearly_plans' => Plan::orderBy('price', 'asc')->where('billing_cycle', 'yearly')->get(),
        ];
        return view('frontend.pages.resellerPricing', $data);
    }
    public function qrCode()
    {
        $data = [
            'qr_plans' => Plan::orderBy('price', 'asc')->where('type', 'qr')->get(),
        ];
        return view('frontend.pages.qrCode', $data);
    }
    public function barCode()
    {
        $data = [
            'barcode_plans' => Plan::orderBy('price', 'asc')->where('type', 'barcode')->get(),
        ];
        return view('frontend.pages.barCode', $data);
    }
    public function nfcCard()
    {
        $data = [
            'nfc_plans' => Plan::orderBy('price', 'asc')->where('type', 'nfc')->get(),
        ];
        return view('frontend.pages.nfcCard', $data);
    }
    public function digitalCard()
    {
        $data = [
            'nfc_plans' => Plan::orderBy('price', 'asc')->where('type', 'nfc')->get(),
        ];
        return view('frontend.pages.digitalCard', $data);
    }
    public function faq()
    {
        $data = [
            'faqs' => Faq::oldest('order')->get(['question', 'answer', 'id']),
        ];
        return view('frontend.pages.faq', $data);
    }
    public function policy()
    {
        return view('frontend.pages.policy');
    }
    public function terms()
    {
        return view('frontend.pages.terms');
    }
    public function cardGuide()
    {
        return view('frontend.pages.cardGuide');
    }
    public function staticNfc()
    {
        return view('frontend.pages.staticNfc');
    }
    public function dynamicNfc()
    {
        return view('frontend.pages.dynamicNfc');
    }
    public function qrGuide()
    {
        return view('frontend.pages.qrGuide');
    }
    public function digitalQr()
    {
        return view('frontend.pages.digitalQr');
    }
    public function staticQr()
    {
        return view('frontend.pages.staticQr');
    }
    public function dynamicQr()
    {
        return view('frontend.pages.dynamicQr');
    }
    public function allBlog()
    {
        $data = [
            'blog_posts'     => BlogPost::latest('id')->where('status', 'publish')->paginate(10),
            'blog_categorys' => BlogCategory::latest('id')->where('status', 'active')->get(),
            'blog_tags'      => BlogTag::latest('id')->where('status', 'active')->get(),
            'recent_posts'   => BlogPost::latest('created_at')->where('status', 'publish')->take(5)->get(),
        ];
        return view('frontend.pages.blog.allBlog', $data);
    }
    public function getBlogPosts(Request $request)
{
    $blog_posts = BlogPost::paginate(5); // Load 5 blog posts per page

    if ($request->ajax()) {
        return view('frontend.pages.blog._blog_posts', compact('blog_posts'))->render();
    }

    return view('frontend.pages.blog.allBlog', compact('blog_posts'));
}
    public function blogDetails($slug)
    {
        $data = [
            'blog'           => BlogPost::where('slug', $slug)->first(),
            'blog_categorys' => BlogCategory::latest('id')->where('status', 'active')->get(),
            'blog_tags'      => BlogTag::latest('id')->where('status', 'active')->get(),
        ];

        return view('frontend.pages.blog.blogDetails', $data);
    }
    public function mailTest()
    {
        return view('frontend.pages.mailTest');
    }

    public function subscribeRegister(Request $request, $id)
    {
        // dd($id);
        $data['plan'] = Plan::where('slug', $id)->first();
        // $data['intent'] = auth()->user()->createSetupIntent();
        return view("user.auth.register", $data);
    }

    public function mailTestStore(Request $request)
    {
        $email = $request->input('email');
        $email_subject = $request->input('email_subject');
        $email_body = $request->input('email_body');

        // Send the email
        Mail::raw($email_body, function ($message) use ($email, $email_subject) {
            $message->to($email)
                ->subject($email_subject);
        });


        return redirect()->back()->with('success', "Mail Sent Successfully");
    }

    public function nfcPage(Request $request, string $name)
    {
        $agent = new Agent();
        $user_device = $agent->isDesktop() ? $agent->browser() : $agent->device();

        // $name = trim($name);
        $name = urldecode(trim($name));

        // Try an exact match first
        $nfc_card = NfcCard::with(
            'nfcData',
            'nfcCompany',
            'nfcGallery',
            'nfcProduct',
            'nfcService',
            'nfcTestimonial',
            'nfcMessages',
            'nfcScan',
            'virtualCard',
            'nfcBanner',
            'nfcSeo',
            'shippingDetails'
        )->where('url_alias', $name)->first();

        // If not found, try partial match
        if (!$nfc_card) {
            $nfc_card = NfcCard::with(
                'nfcData',
                'nfcCompany',
                'nfcGallery',
                'nfcProduct',
                'nfcService',
                'nfcTestimonial',
                'nfcMessages',
                'nfcScan',
                'virtualCard',
                'nfcBanner',
                'nfcSeo',
                'shippingDetails'
            )->where('url_alias', 'LIKE', '%' . $name . '%')->first();
        }

        if ($nfc_card) {
            NfcScan::create([
                'nfc_id'      => $nfc_card->id,
                'nfc_code'    => $nfc_card->code,
                'ip_address'  => $request->ip(),
                'user_device' => $user_device,
            ]);

            $data = ['nfc_card' => $nfc_card];

            switch ($nfc_card->nfc_template) {
                case 'template-one':
                    return view('frontend.pages.nfc.template_one', $data);
                case 'template-two':
                    return view('frontend.pages.nfc.template_two', $data);
                case 'template-three':
                    return view('frontend.pages.nfc.template_three', $data);
                case 'template-four':
                    return view('frontend.pages.nfc.template_four', $data);
                case 'template-five':
                    return view('frontend.pages.nfc.template_five', $data);
                case 'template-six':
                    return view('frontend.pages.nfc.template_six', $data);
                default:
                return view('frontend.pages.nfc.template_one', $data);
            }
        } else {
            return redirect()->route('homePage')->with('error', 'Page not found');
        }
    }
}
