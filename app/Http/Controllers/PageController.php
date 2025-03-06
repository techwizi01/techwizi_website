<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }
    public function about()
    {
        return view('frontend.about');
    }
    public function service()
    {
        return view('frontend.service-detail');
    }
    public function portfolio()
    {
        return view('frontend.portfolio');
    }
    public function pricing()
    {
        return view('frontend.pricing');
    }
    public function faq()
    {
        return view('frontend.faq');
    }
    public function policies()
    {
        return view('frontend.policies');
    }
    public function blog()
    {
        return view('frontend.blog');
    }
    public function blogDetail()
    {
        return view('frontend.blog-detail');
    }
    public function contact()
    {
        return view('frontend.contact');
    }
}
