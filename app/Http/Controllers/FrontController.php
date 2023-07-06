<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function about_grs()
    {
        return view('frontend.About-grs');
    }

    public function about_partner()
    {
        return view('frontend.About-partner');
    }

    public function contactPage()
    {
        return view('frontend.Contact');
    }

    public function projectPage()
    {
        return view('frontend.Project');
    }
    public function projectDetailPage()
    {
        return view('frontend.Project-Detail');
    }

    public function newsPage()
    {
        return view('frontend.News');
    }
}
