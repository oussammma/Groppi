<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use App\Models\Whatsapp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class contactController extends Controller
{
    public function index() 
    {
        $watps = Whatsapp::all();
        return view('user.contact', compact('watps'));
    }
    public function sendEmail(Request $request)
    {
        $details = [
            'name' => $request->name,
            'sujet' => $request->sujet,
            'email' => $request->email,
            'message' => $request->message
        ];
        Mail::to('oussammma5@gmail.com')->send(new ContactMail($details));
        return redirect()->back();
    }
}
