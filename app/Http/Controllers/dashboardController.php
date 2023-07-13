<?php

namespace App\Http\Controllers;
use Analytics;
use Carbon\Carbon;
use Spatie\Analytics\Period;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class dashboardController extends Controller
{
    public function index()
    {
        
        $analyticsData = Analytics::fetchTotalVisitorsAndPageViews(Period::days(30));
       
        return view('backend.dashboard.dashboard',compact('analyticsData'));
    }
}
