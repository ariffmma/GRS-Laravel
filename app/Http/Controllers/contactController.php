<?php

namespace App\Http\Controllers;
use App\Models\contact;
use App\Models\contact_form;
use Illuminate\Http\Request;

class contactController extends Controller
{
    public function store(Request $request)
    {

        contact_form::create([
        'email'          => $request->email,
        'name'           => $request->name,
        'message'        => $request->message,
        'catagori'       => $request->categori
        ]);
       
    }

    public function storeFirm(Request $request)
    {

        contact::create([
        'email'          => $request->email,
        'name'           => $request->name,
        'link'        => $request->link
        ]);
       
    }

    public function show()
    {

    }

    public function destroy(contact $contact)
    {
        $contact = contact_form::findOrFail($contact->id);

        $contact->delete();

        return back()->with(['message' => 'Post deleted successfully!']);
    }


    public function index()
    {
        $contact = contact_form::get();
        return view('backend.contact.index', compact('contact'));
    }


}
