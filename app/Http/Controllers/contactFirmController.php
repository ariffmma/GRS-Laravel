<?php

namespace App\Http\Controllers;
use App\Models\contact;
use Illuminate\Http\Request;

class contactFirmController extends Controller
{
    public function index()
    {
        $contact = contact::get();
        return view('backend.contact.indexFirm',compact('contact'));
    }
    public function show()
    {

    }

    public function destroy(contact $contact)
    {
        $contact = contact::findOrFail($contact->id);

        $contact->delete();

        return back()->with(['message' => 'Post deleted successfully!']);
    }

    public function edit()
    {

    }
    
    public function update()
    {
 
    }
}
