<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Services\JSONService;

class HomeController extends Controller
{
    protected $jsonService;
    public function __construct(JSONService $jsonService)
    {
        $this->jsonService = $jsonService;
    }

    public function index()
    {
        $data = $this->jsonService->getAboutUs();
        return view('frontend.home.index',compact('data'));
    }

    public function about()
    {
        $data = $this->jsonService->getAboutUs();
        return view('frontend.home.about-us',compact('data'));
    }

    public function subscriptions(){

        return view('frontend.home.subscriptions');
    }

    public function why(){
        return view('frontend.home.why');
    }

    public function faq(){
        return view('frontend.home.faqs');
    }

    public function contact()
    {
        return view('frontend.home.contact-us');
    }

    public function privacy()
    {
        $data = $this->jsonService->getDisclaimer();
        return view('frontend.home.privacy',compact('data'));
    }

    public function terms()
    {
        $data = $this->jsonService->getDisclaimer();
        return view('frontend.home.terms-and-conditions',compact('data'));
    }

    public function disclaimer(){
        $data = $this->jsonService->getDisclaimer();
        return view('frontend.home.disclaimer',compact('data'));
    }

    public function investorsCharter(){

        return view('frontend.home.investor-charter');
    }

    public function investorsComplaints(){
        $data = $this->jsonService->getInvestorsComplaints();
        return view('frontend.home.investor-complaints',compact('data'));
    }
}