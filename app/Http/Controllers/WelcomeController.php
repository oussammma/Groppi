<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Marques;
use App\Models\Produits;
use App\Models\Whatsapp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index()
    {
        $watps = Whatsapp::all();
        $marques = Marques::all();
        $pros = DB::table('Produits as p')
            ->join('Marques as m', 'p.marque_id', '=', 'm.id')
            ->select('p.*', 'm.*')
            ->inRandomOrder()
            ->get();
        $new_pros = DB::table('Produits as p')
            ->join('Marques as m', 'p.marque_id', '=', 'm.id')
            ->select('p.*', 'm.*')
            ->orderBy('p.id', 'desc')
            ->paginate(8);
        $pros_rosh = DB::table('Produits as p')
            ->join('Marques as m', 'p.marque_id', '=', 'm.id')
            ->select('p.*', 'm.*')
            ->where('m.nom', 'rohnfried')
            ->get();
        $pros_natural = DB::table('Produits as p')
            ->join('Marques as m', 'p.marque_id', '=', 'm.id')
            ->select('p.*', 'm.*')
            ->where('m.nom', 'natural')
            ->get();
        $pros_probac = DB::table('Produits as p')
            ->join('Marques as m', 'p.marque_id', '=', 'm.id')
            ->select('p.*', 'm.*')
            ->where('m.nom', 'probac')
            ->get();
        $pros_tollisan = DB::table('Produits as p')
            ->join('Marques as m', 'p.marque_id', '=', 'm.id')
            ->select('p.*', 'm.*')
            ->where('m.nom', 'VET SCHROEDER')
            ->get();
        $pros_van = DB::table('Produits as p')
            ->join('Marques as m', 'p.marque_id', '=', 'm.id')
            ->select('p.*', 'm.*')
            ->where('m.nom', 'vanrobaeys')
            ->get();

        // oiseaux navbar
        $nav_oiseaux = DB::table('Produits as p')
            ->join('Categories as c', 'p.categorie_id', '=', 'c.id')
            ->where('p.is_medical', true)
            ->where('c.nom', 'oiseau ')
            ->select('p.nom_P as nom')
            ->paginate(3);

        return view('welcome', compact(
            'marques',
            'pros',
            'new_pros',
            'pros_rosh',
            'pros_natural',
            'pros_probac',
            'pros_tollisan',
            'pros_van',
            'watps',
            'nav_oiseaux'
        ));
    }

    public function search(Request $request)
    {
        $query = $request->get('query');
        $data = DB::table('Produits as p')
            ->join('Marques as m', 'p.marque_id', '=', 'm.id')
            ->join('categories as c', 'p.categorie_id', '=', 'c.id')
            ->where('nom_P', 'like', '%' . $query . '%')
            ->orWhere('c.nom', 'like', '%' . $query . '%')
            ->orWhere('m.nom', 'like', '%' . $query . '%')
            ->get();
        $output = '';
        if (count($data) > 0) {
            $output .= '<ul class="dropdown-menu" style="display:block; position: relative; width: 100%;">';
            foreach ($data as $row) {
                $output .= '
                <li><a class="dropdown-item" href="/produit/' . $row->nom_P . '">' . $row->nom_P . '</a></li>
            ';
            }
            $output .= '</ul>';
        } else {
            $output .= '<ul class="dropdown-menu" style="display:block; position: relative; width: 100%;">
                <div>
                    <span class="px-3 fs-6">Pas de résultat</span>
                </div>
            </ul>';
        }
        return response($output);
    }
}
