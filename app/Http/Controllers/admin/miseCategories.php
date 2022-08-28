<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Carbon\Carbon;
use Illuminate\Http\Request;

class miseCategories extends Controller
{
    public function index()
    {
        $cats = Categories::orderBy('id', 'desc')->get();
        return view('admin.miseCategories', compact('cats'));
    }
    public function store(Request $request)
    {
        Categories::insert([
            'nom' => $request->cat_name,
            'created_at' => Carbon::now(),
        ]);
        return redirect()->back();
    }
    public function delete($id)
    {
        Categories::findOrFail($id)->delete();
        return redirect()->back();
    }
    public function edite(Request $request)
    {
        $id = $request->cat_id;
        Categories::findOrFail($id)->update([
            'nom' => $request->cat_nom,
            'updated_at' => Carbon::now(),
        ]);
        return redirect()->back();
    }
}
