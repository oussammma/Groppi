<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Marques;
use App\Models\Whatsapp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class noMarqueController extends Controller
{
    public function index()
    {
        $watps = Whatsapp::all();
        $marques = Marques::all();
        return view('user.no-marques', compact('marques', 'watps'));
    }
}
