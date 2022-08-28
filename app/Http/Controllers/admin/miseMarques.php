<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Marques;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class miseMarques extends Controller
{
    public function index()
    {
        $mars = Marques::orderBy('id', 'desc')->get();
        return view('admin.miseMarques', compact('mars'));
    }
    public function store(Request $request)
    {
        // $request->validate([
        //     'nom' => 'required|string|min:3|max:40',
        //     'img_M' => 'required|mimes:png,jpeg,jpg'
        // ]);
        $image = $request->file('mar_img');
        $image_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(600, 200)->save('upload/marques' . $image_gen);
        $save_url = 'upload/marques' . $image_gen;

        Marques::insert([
            'nom' => $request->mar_name,
            'img_M' => $save_url,
            'created_at' => Carbon::now(),
        ]);
        return redirect()->back();
    }

    public function delete($id)
    {
        Marques::findOrFail($id)->delete();
        return redirect()->back();
    }

    public function edite(Request $request)
    {
        $id = $request->mar_idE;
        $old_img = $request->old_img;
        if ($request->file('mar_imgE')) {
            unlink($old_img); 
            $image = $request->file('mar_imgE');
            $image_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(800, 200)->save('upload/marques/' . $image_gen);
            $save_url = 'upload/marques/' . $image_gen;

            Marques::findOrFail($id)->update([
                'nom' => $request->mar_nomE,
                'img_M' => $save_url,
                'updated_at' => Carbon::now()
            ]);
            return redirect()->back();
        }else {
            Marques::findOrFail($id)->update([
                'nom' => $request->mar_nomE,
                'updated_at' => Carbon::now()
            ]);
            return redirect()->back();
        }
    }
}
