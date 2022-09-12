<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    
    public function index()
    {
        return view('profil.index');
    }

    public function update(Request $request)
    {
        $user = $request->user();

        $user->update([
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => bcrypt($request->password),
        ]);

        return redirect('/profil')->with('status', 'Profil Berhasil Diubah');
    }
}
