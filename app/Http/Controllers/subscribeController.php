<?php

namespace App\Http\Controllers;
use App\Models\subscribe;
use Illuminate\Http\Request;

class subscribeController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'email'         => 'required|email',           
        ]);
        
        $subscribe = User::where('email',$request->email)->first();
        if(isset($subscribe->id)){
            
        }else{
            $subs = Subscribe::where('email',$request->email)->first();
            if(isset($subs->id)){
                
            }else{
                Subscribe::create([
                'email'          =>$request->email,
                'nama'          =>$request->name
                ]);
            }
             
        }
       
       
        return back();
    }
}
