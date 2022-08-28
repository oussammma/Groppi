<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Produits;
use App\Models\Whatsapp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class magasinController extends Controller
{
    public function index()
    {
        $watps = Whatsapp::all();
        $pros = Produits::paginate(3);
        return view('user.nos-magasin', compact('pros', 'watps'));
    }
}
