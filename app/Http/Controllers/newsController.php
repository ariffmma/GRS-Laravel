<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class newsController extends Controller
{
    public function index()
    {
        return view('backend.news.index');
    }

    public function create()
    {
        return view('backend.news.create');
    } 

    public function store()
    {
        return view('backend.news.index');
    }

    public function delete()
    {
        return view('backend.news.index');
    }
}
