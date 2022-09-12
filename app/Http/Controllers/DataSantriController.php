<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataSantri;
use App\Models\Kriteria;

class DataSantriController extends Controller
{
    
    public function index()
    {
        $santri = DataSantri::all();

        return view('santri.index', compact('santri'));
    }

    public function show(DataSantri $santri)
    {
        return view('santri.show', compact('santri'));
    }

    public function create()
    {
        return view('santri.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'jujur' => 'required',
            'wibawa' => 'required',
            'hafalan_imriti' => 'required',
            'tangkas' => 'required',
            'ulet' => 'required',
            'disiplin' => 'required',
        ]);

        $santri = DataSantri::create([
            'nama' => $request->nama,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);

        $santri->kriteria()->create([
            'jujur' => $request->jujur,
            'wibawa' => $request->wibawa,
            'hafalan_imriti' => $request->hafalan_imriti,
            'tangkas' => $request->tangkas,
            'ulet' => $request->ulet,
            'disiplin' => $request->disiplin,
        ]);

        return redirect('/data-santri')->with('status', 'Data Santri Berhasil Ditambah');
    }

    public function edit(DataSantri $santri)
    {
        return view('santri.edit', compact('santri'));
    }

    public function update(Request $request, DataSantri $santri)
    {
        $request->validate([
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'jujur' => 'required',
            'wibawa' => 'required',
            'hafalan_imriti' => 'required',
            'tangkas' => 'required',
            'ulet' => 'required',
            'disiplin' => 'required',
        ]);

        $santri->update([
            'nama' => $request->nama,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);

        $kriteria = Kriteria::where('data_santri_id', $santri->id)->first();

        $kriteria->update([
            'jujur' => $request->jujur,
            'wibawa' => $request->wibawa,
            'hafalan_imriti' => $request->hafalan_imriti,
            'tangkas' => $request->tangkas,
            'ulet' => $request->ulet,
            'disiplin' => $request->disiplin,
        ]);

        return redirect('/data-santri')->with('status', 'Data Santri Berhasil Dihapus');
    }

    public function destroy(DataSantri $santri)
    {
        $santri->kriteria()->delete();
        $santri->delete();

        return redirect('/data-santri')->with('status', 'Data Santri Berhasil Diubah');
    }

}
