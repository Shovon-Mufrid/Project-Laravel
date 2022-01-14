<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        return view("frontend.home");
    }

    public function about()
    {
        return view("frontend.about");
    }

    public function contact()
    {
        return view("frontend.contact");
    }

    public function service()
    {
        return view("frontend.service");
    }

    public function pages()
    {
        return 'Page is not ready';
    }

    public function contactPost(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:contacts,email',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required|min:5|max:20'
        ]);
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();
        return back()->with('message', 'Successfully Saved');
    }
    //
}
