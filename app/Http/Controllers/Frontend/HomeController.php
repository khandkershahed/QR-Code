<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
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
        return view('frontend.pages.pricing');
    }
    public function digitalCard() {
        return view('frontend.pages.digitalCard');
    }
    public function qrCode() {
        return view('frontend.pages.qrCode');
    }
    public function nfcCard() {
        return view('frontend.pages.nfcCard');
    }
    public function faq() {
        return view('frontend.pages.faq');
    }
    public function policy() {
        return view('frontend.pages.policy');
    }
    public function terms() {
        return view('frontend.pages.terms');
    }
}
