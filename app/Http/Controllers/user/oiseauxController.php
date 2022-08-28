<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Whatsapp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class oiseauxController extends Controller
{
    public function index()
    {
        $watps = Whatsapp::all();
        $pros_oiseaux = DB::table('Produits as p')
            ->join('categories as c', 'p.categorie_id', '=', 'c.id')
            ->select('p.*', 'c.*')
            ->where('c.nom', 'oiseau')
            ->get();
        return view('user.oiseaux', compact('pros_oiseaux', 'watps'));
    }
}
