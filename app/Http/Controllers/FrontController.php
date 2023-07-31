<?php

namespace App\Http\Controllers;
use App\Models\project;
use App\Models\categorie;
use App\Models\post_categorie;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $projects= project::join('post_categories','projects.id','post_id')->join('categories','categories.categori_id','post_categories.categori_id')->where('projects.highlight',0)->where('projects.selected',0)->get();
        $projectHighlight= project::join('post_categories','projects.id','post_id')->join('categories','categories.categori_id','post_categories.categori_id')->where('projects.highlight',1)->get();
        $projectSelect= project::join('post_categories','projects.id','post_id')->join('categories','categories.categori_id','post_categories.categori_id')->where('projects.highlight',0)->where('projects.selected',1)->get();
        return view('frontend.home',compact('projects','projectHighlight','projectSelect'));
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
        // $projects = project::join('post_categories','projects.id','post_id')->join('categories','categories.categori_id','post_categories.categori_id')->where('projects.highlight',0)->where('projects.selected',0)->take(1)->get();
        $projects = project::join('post_categories','projects.id','post_id')->join('categories','categories.categori_id','post_categories.categori_id')->where('projects.highlight',0)->where('projects.selected',0)->get();
        return view('frontend.Contact',compact('projects'));
    }
    
    public function listProject()
    {
        $categories = categorie::get();
        $projects = project::join('post_categories','projects.id','post_id')->join('categories','categories.categori_id','post_categories.categori_id')->orderBy('projects.created_at','ASC')->get();
        return view('frontend.List-Detail',compact('projects','categories'));
    }

    public function projectPage()
    {
        $categories = categorie::get();
        $projects = project::join('post_categories','projects.id','post_id')->join('categories','categories.categori_id','post_categories.categori_id')->orderBy('projects.created_at','ASC')->get();
        return view('frontend.Project',compact('projects','categories'));
    }
    public function projectDetailPage($category,$slug)
    {
        $project = project::join('post_categories','projects.id','post_id')->join('categories','categories.categori_id','post_categories.categori_id')->where('projects.slug',$slug)->first();
        $projects = project::join('post_categories','projects.id','post_id')->join('categories','categories.categori_id','post_categories.categori_id')->where('projects.slug','!=',$slug)->take(4)->get();
        return view('frontend.Project-Detail',compact('project','projects'));
    }

    public function projectCategory($category)
    {
        $categories = categorie::get();
        $categori = categorie::where('cate_slug',$category)->first();
        $projects = project::join('post_categories','projects.id','post_id')->join('categories','categories.categori_id','post_categories.categori_id')->where('post_categories.categori_id',$categori->categori_id)->orderBy('projects.created_at','ASC')->get();
        return view('frontend.Project',compact('projects','categories'));
    }

    public function projectYear($year)
    {
        $categories = categorie::get();
        if($year == "all"){
            $projects = project::join('post_categories','projects.id','post_id')->join('categories','categories.categori_id','post_categories.categori_id')->orderBy('projects.created_at','ASC')->get();
        }else{
            $projects = project::join('post_categories','projects.id','post_id')->join('categories','categories.categori_id','post_categories.categori_id')->orderBy('projects.created_at','ASC')->where('projects.year',$year)->get();
        }
        
        return view('frontend.Project',compact('projects','categories'));
    }




    public function newsPage()
    {
        $projects= project::join('post_categories','projects.id','post_id')->join('categories','categories.categori_id','post_categories.categori_id')->where('projects.highlight',0)->where('projects.selected',0)->get();
        $projectHighlight= project::join('post_categories','projects.id','post_id')->join('categories','categories.categori_id','post_categories.categori_id')->where('projects.highlight',1)->get();
        $projectSelect= project::join('post_categories','projects.id','post_id')->join('categories','categories.categori_id','post_categories.categori_id')->where('projects.highlight',0)->where('projects.selected',1)->get();
        return view('frontend.News',compact('projects','projectHighlight','projectSelect'));
    }
}
