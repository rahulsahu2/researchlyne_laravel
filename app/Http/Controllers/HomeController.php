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
        return view('frontend.home.privacy');
    }

    public function terms()
    {
        return view('frontend.home.terms');
    }

    public function disclaimer(){

        return view('frontend.home.disclaimer');
    }

    public function investorsCharter(){

        return view('frontend.home.investor-charter');
    }

    public function investorsComplaints(){
        $data = $this->jsonService->getInvestorsComplaints();
        return view('frontend.home.investor-complaints',compact('data'));
    }
}