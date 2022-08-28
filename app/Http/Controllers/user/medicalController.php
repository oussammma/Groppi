<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Whatsapp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class medicalController extends Controller
{
    public function index()
    {
        $watps = Whatsapp::all();
        $medPro = DB::table('Produits as p')
            ->where('is_medical', true)
            ->get();
        return view('user.medical-produit', compact('medPro', 'watps'));
    }
}
