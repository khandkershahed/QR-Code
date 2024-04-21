<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Faq;
use App\Models\Admin\Plan;
use Illuminate\Http\Request;

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
        return view('frontend.pages.services');
    }
    public function pricing() {
        $data = [
            'monthly_plans' => Plan::orderBy('price','asc')->where('billing_cycle', 'monthly')->get(),
            'yearly_plans' => Plan::orderBy('price','asc')->where('billing_cycle', 'yearly')->get(),
        ];
        return view('frontend.pages.pricing',$data);
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
}
