<?php

namespace App\Http\Controllers;
use App\Models\subscribe;
use App\Models\User;
use Illuminate\Http\Request;

class subscribeController extends Controller
{
    public function store(Request $request)
    {
        
        $subscribe = User::where('email',$request->email)->first();
        if(isset($subscribe->id)){
            
        }else{
            $subs = subscribe::where('email',$request->email)->first();
            if(isset($subs->id)){
                
            }else{
                subscribe::create([
                'email'          =>$request->email,
                'nama'          =>$request->nama
                ]);
            }
             
        }
       
       
       
    }

    public function index()
    {
        $subscriber = subscribe::get();
        return view('backend.subscribe.index',compact('subscriber'));
    }

    public function destroy()
    {

    }
}
