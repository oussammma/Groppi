<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Marques;
use App\Models\Whatsapp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class MarqueProController extends Controller
{
    public function index($name)
    {
        $watps = Whatsapp::all();
        $marPro = DB::table('Produits as p')
            ->join('marques as m', 'p.marque_id', '=', 'm.id')
            ->where('nom', $name)
            ->select('p.*')
            ->get();
        $marque = Marques::where('nom', $name)->get();
        return view('user.marque-produit', compact('marPro', 'marque', 'watps'));
    }
}
