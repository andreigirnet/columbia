<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function sendEmail(Request $request){
        Mail::to($request->email)->send(new ContactMail($request->fullName, $request->email, $request->phone));
        return redirect()->back()->with('success','Your request has been received');
    }
}
