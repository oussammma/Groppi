<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Produits;
use App\Models\Whatsapp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProduitsDetController extends Controller
{
    public function index($name)
    {
        $name_str = Str::replace('_', ' ', $name);
        $pros = DB::table('Produits as p')
            ->join('categories as c', 'p.categorie_id', '=', 'c.id')
            ->join('marques as m', 'p.marque_id', '=', 'm.id')
            ->where('nom_P', $name_str)
            ->select('p.*', 'c.nom as categorie', 'm.img_M as marque', 'm.nom as nom_marque')
            ->get();
        $pro_categorie = DB::table('Produits as p')
            ->join('categories as c', 'p.categorie_id', '=', 'c.id')
            ->where('nom_P', $name_str)
            ->select('c.nom')
            ->get();
        $pro_categorie_get = DB::table('Produits as p')
            ->join('Marques as m', 'p.marque_id', '=', 'm.id')
            ->join('categories as c', 'p.categorie_id', '=', 'c.id')
            ->where('c.nom', json_decode($pro_categorie, true))
            ->inRandomOrder()
            ->select('p.*', 'm.*')
            ->get();

        $pro_marque = DB::table('Produits as p')
            ->join('Marques as m', 'p.marque_id', '=', 'm.id')
            ->where('nom_P', $name_str)
            ->select('m.nom')
            ->get();
        $pro_marque_get = DB::table('Produits as p')
            ->join('Marques as m', 'p.marque_id', '=', 'm.id')
            ->join('categories as c', 'p.categorie_id', '=', 'c.id')
            ->where('m.nom', json_decode($pro_marque, true))
            ->inRandomOrder()
            ->select('p.*', 'm.*')
            ->get();
        $watps = Whatsapp::all();

        return view('user.produit-Detais', compact('pros', 'pro_categorie_get', 'pro_marque_get', 'watps'));
    }
}
