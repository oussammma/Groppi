<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Whatsapp;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class profileController extends Controller
{
    public function index()
    {
        $watps = Whatsapp::all();
        return view('admin.profile', compact('watps'));
    }
    public function edite(Request $request)
    {
        $user = auth()->user();
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        return redirect()->back();
    }


    public function pass(Request $request)
    {
        $hashPassword = Auth::user()->password;
        if ((Hash::check($request->old_pass, $hashPassword))) {
            if ($request->new_pass == $request->conf_pass) {
                $user = auth()->user();
                $user->update([
                    'password' => Hash::make($request->new_pass),
                ]);
                Auth::logout();
                return redirect()->route('login');
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }


    public function wtsp_update(Request $request)
    {
        $id = $request->num_id;
        // $request->validate([
        //     'number' => 'required|string|min:6|max:20'
        // ]);
        Whatsapp::findOrFail($id)->update([
            'number' => $request->whtsp_num,
            'updated_at' => Carbon::now(),
        ]);
        return redirect()->back();
    }
}
