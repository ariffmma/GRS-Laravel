<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class projectController extends Controller
{
    public function index()
    {
        return view('backend.project.index');
    }

    public function create()
    {
        return view('backend.project.create');
    } 

    public function store()
    {
        return view('backend.project.index');
    }

    public function delete()
    {
        return view('backend.project.index');
    }
}
