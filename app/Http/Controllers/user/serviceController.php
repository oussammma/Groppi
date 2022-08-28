<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Whatsapp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class serviceController extends Controller
{
    public function index()
    {
        $watps = Whatsapp::all();
        return view('user.nos-service', compact('watps'));
    }
}
