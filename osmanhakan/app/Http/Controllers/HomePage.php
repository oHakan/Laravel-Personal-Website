<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class HomePage extends Controller
{
    function anasayfa(){
        return view('anasayfa');
    }

    function portfoy(){
        return view('portfoy');
    }
    
    function contact(){
        return view('contact');
    }

    function contactsubmit(Request $req){
        $contact= new Contact;
        $contact->name=$req->name;
        $contact->detail=$req->detail;
        $contact->contact=$req->contact;
        $contact->save();

        return redirect('contact')->with('message','<b>Congratulations! You have succesfully sent the email');
    }
}
