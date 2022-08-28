<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Whatsapp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class chatController extends Controller
{

    public function index()
    {
        $watps = Whatsapp::all();
        $pros_chat = DB::table('Produits as p')
            ->join('categories as c', 'p.categorie_id', '=', 'c.id')
            ->select('p.*', 'c.*')
            ->where('c.nom', 'chat')
            ->get();
        return view('user.chat', compact('pros_chat', 'watps'));
    }
}
