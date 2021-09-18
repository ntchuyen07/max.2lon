<?php

namespace App\Http\Controllers\UserControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\User;
use Session;

class ContactController extends Controller
{
    function contact()
    {

        return view('user.contact');
    }

    function contactCreate(Request $request) 
    {
        $contact = new Contact();
        $contact->user_id = session('user')->id;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->content = $request->message;
        $contact->save();
        return redirect()->to('contact');
        
    }
}
