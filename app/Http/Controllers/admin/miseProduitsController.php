<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Marques;
use App\Models\Produits;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;


class miseProduitsController extends Controller
{
    public function index()
    {
        $pros = DB::table('Produits as p')
            ->join('categories as c', 'p.categorie_id', '=', 'c.id')
            ->join('marques as m', 'p.marque_id', '=', 'm.id')
            ->select('p.*', 'c.nom as categorie', 'm.nom as marque', "c.id as id_C", "m.id as id_M", "m.img_M as image_M")
            ->orderBy('p.id', 'desc')
            ->get();

        $cats = Categories::all();
        $mars = Marques::all();
        return view('admin.miseProduit', compact('pros', 'cats', 'mars'));
    }
    private function getImage($image)
    {
        $image_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(800, 800)->save('upload/produit/' . $image_gen);
        $save_url = 'upload/produit/' . $image_gen;
        return $save_url;
    }
    public function store(Request $request)
    {
        if ($request->img_p_1) {
            $img1 = self::getImage($request->img_p_1);
        } else {
            $img1 = null;
        }
        if ($request->img_p_2) {
            $img2 = self::getImage($request->img_p_2);
        } else {
            $img2 = null;
        }
        if ($request->img_p_3) {
            $img3 = self::getImage($request->img_p_3);
        } else {
            $img3 = null;
        }
        if ($request->img_p_4) {
            $img4 = self::getImage($request->img_p_4);
        } else {
            $img4 = null;
        }

        $medical = $request->is_medical;
        $medical_val = false;
        if ($medical == 'on') {
            $medical_val = true;
        } else {
            $medical_val = false;
        }
        $dispo = $request->disponible;
        $dispo_val = false;
        if ($dispo == 'on') {
            $dispo_val = true;
        } else {
            $dispo_val = false;
        }
        Produits::insert([
            'marque_id' => $request->marques,
            'categorie_id' => $request->categories,
            'img_p_1' => $img1,
            'img_p_2' => $img2,
            'img_p_3' => $img3,
            'img_p_4' => $img4,
            'nom_P' => $request->nom_P,
            'description_P' => $request->description_P,
            'recomendation_P' => $request->recomendation_P,
            'prix_P' => $request->prix_P,
            'is_medical' => $medical_val,
            'disponible' => $dispo_val,
            'created_at' => Carbon::now(),
        ]);
        return redirect()->back();
    }

    public function delete($id)
    {
        Produits::findOrFail($id)->delete();
        return redirect()->back();
    }

    public function edite(Request $request)
    {
        $id = $request->pro_idE;
        if ($request->file('img_p_1E') or $request->file('img_p_2E') or $request->file('img_p_3E') or $request->file('img_p_4E')) {
            if ($request->img_p_1E) {
                $img1 = self::getImage($request->img_p_1E);
            } else {
                $img1 = $request->old_img_1;
            }
            if ($request->img_p_2E) {
                $img2 = self::getImage($request->img_p_2E);
            } else {
                $img2 = $request->old_img_2;
            }
            if ($request->img_p_3E) {
                $img3 = self::getImage($request->img_p_3E);
            } else {
                $img3 = $request->old_img_3;
            }
            if ($request->img_p_4E) {
                $img4 = self::getImage($request->img_p_4E);
            } else {
                $img4 = $request->old_img_4;
            }
            $medical = $request->is_medicalE;
            $medical_val = false;
            if ($medical == 'on') {
                $medical_val = true;
            } else {
                $medical_val = false;
            }
            $dispo = $request->disponibleE;
            $dispo_val = false;
            if ($dispo == 'on') {
                $dispo_val = true;
            } else {
                $dispo_val = false;
            }
            Produits::findOrFail($id)->update([
                'marque_id' => $request->marquesE,
                'categorie_id' => $request->categoriesE,
                'img_p_1' => $img1,
                'img_p_2' => $img2,
                'img_p_3' => $img3,
                'img_p_4' => $img4,
                'nom_P' => $request->nom_PE,
                'description_P' => $request->description_PE,
                'recomendation_P' => $request->recomendation_PE,
                'prix_P' => $request->prix_PE,
                'is_medical' => $medical_val,
                'disponible' => $dispo_val,
                'created_at' => Carbon::now(),
            ]);

            return redirect()->back();
        } else {
            $medical = $request->is_medicalE;
            $medical_val = false;
            if ($medical == 'on') {
                $medical_val = true;
            } else {
                $medical_val = false;
            }
            $dispo = $request->disponibleE;
            $dispo_val = false;
            if ($dispo == 'on') {
                $dispo_val = true;
            } else {
                $dispo_val = false;
            }
            Produits::findOrFail($id)->update([
                'marque_id' => $request->marquesE,
                'categorie_id' => $request->categoriesE,
                'nom_P' => $request->nom_PE,
                'description_P' => $request->description_PE,
                'recomendation_P' => $request->recomendation_PE,
                'prix_P' => $request->prix_PE,
                'is_medical' => $medical_val,
                'disponible' => $dispo_val,
                'created_at' => Carbon::now(),
            ]);
            return redirect()->back();
        }
    }

    // searsh
    // public function searsh(Request $request)
    // {
    //     $output = '';
    //     $produits = DB::table('Produits as p')
    //         ->join('categories as c', 'p.categorie_id', '=', 'c.id')
    //         ->join('marques as m', 'p.marque_id', '=', 'm.id')
    //         ->select('p.*', 'c.nom as categorie', 'm.nom as marque', "c.id as id_C", "m.id as id_M", "m.img_M as image_M")
    //         ->where('nom_P', 'like', '%' . $request->pro_searsh . '%')
    //         // ->orWhere('categorie', 'like', '%' . $request->pro_searh . '%')
    //         // ->orWhere('marque', 'like', '%' . $request->pro_searh . '%')
    //         ->get();
    //     if (count($produits) > 0) {
    //         foreach ($produits as $produit) {
    //             $output .=
    //                 '<tr>
    //             <td><img src="' . $produit->img_p_1 . '" alt="' . $produit->nom_P . '" width="100px"></td>
    //             <td> ' . $produit->nom_P . ' </td>
    //             <td> ' . $produit->categorie . ' </td>
    //             <td> ' . $produit->marque . ' </td>
    //             <td> ' . $produit->prix_P . ' </td>
    //             <td><a href="#" class="EditeBtn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
    //             class="fa-solid fa-pen-clip"></i></a></td>
    //             <td><a href="' . route("mar.delete", $produit->id) . '" id="DeleteBtn"><i
    //             class="fa-solid fa-trash"></i></a></td>
    //             </tr>
    //             ';
    //         }
    //     } else {
    //         $output .= '<span class="position-absolute mt-4 ms-5"><i class="fa-solid fa-triangle-exclamation text-danger fs-4 me-2"></i>Nos resultat</span>';
    //     }

    //     return response($output);
    // }
}
