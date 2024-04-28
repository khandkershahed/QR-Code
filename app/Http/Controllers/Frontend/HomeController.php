<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Admin\Faq;
use App\Models\Admin\Plan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function homePage() {
        return view('frontend.pages.homePage');
    }

    public function contact() {
        return view('frontend.pages.contact');
    }

    public function about() {
        return view('frontend.pages.about');
    }
    public function services() {
        $data = [
            'monthly_plans' => Plan::orderBy('price','asc')->where('billing_cycle', 'monthly')->get(),
            'yearly_plans' => Plan::orderBy('price','asc')->where('billing_cycle', 'yearly')->get(),
        ];
        return view('frontend.pages.services', $data);
    }
    public function userPricing() {
        $data = [
            'monthly_plans' => Plan::orderBy('price','asc')->where('billing_cycle', 'monthly')->get(),
            'yearly_plans' => Plan::orderBy('price','asc')->where('billing_cycle', 'yearly')->get(),
        ];
        return view('frontend.pages.userPricing',$data);
    }
    public function resellerPricing() {
        $data = [
            'monthly_plans' => Plan::orderBy('price','asc')->where('billing_cycle', 'monthly')->get(),
            'yearly_plans' => Plan::orderBy('price','asc')->where('billing_cycle', 'yearly')->get(),
        ];
        return view('frontend.pages.resellerPricing',$data);
    }
    public function qrCode() {
        return view('frontend.pages.qrCode');
    }
    public function nfcCard() {
        return view('frontend.pages.nfcCard');
    }
    public function faq() {
        $data = [
            'faqs' => Faq::oldest('order')->get(['question','answer','id']),
        ];
        return view('frontend.pages.faq',$data);
    }
    public function policy() {
        return view('frontend.pages.policy');
    }
    public function terms() {
        return view('frontend.pages.terms');
    }
    public function cardGuide() {
        return view('frontend.pages.cardGuide');
    }
    public function digitalCard() {
        return view('frontend.pages.digitalCard');
    }
    public function staticNfc() {
        return view('frontend.pages.staticNfc');
    }
    public function dynamicNfc() {
        return view('frontend.pages.dynamicNfc');
    }
    public function qrGuide() {
        return view('frontend.pages.qrGuide');
    }
    public function digitalQr() {
        return view('frontend.pages.digitalQr');
    }
    public function staticQr() {
        return view('frontend.pages.staticQr');
    }
    public function dynamicQr() {
        return view('frontend.pages.dynamicQr');
    }
    public function mailTest() {
        return view('frontend.pages.mailTest');
    }
    public function mailTestStore(Request $request) {
        $email = $request->input('email');
        $email_subject = $request->input('email_subject');
        $email_body = $request->input('email_body');

        // Send the email
        Mail::raw($email_body, function($message) use ($email, $email_subject) {
            $message->to($email)
                    ->subject($email_subject);
        });


        return redirect()->back()->with('success', "Mail Sent Successfully");
    }
}
