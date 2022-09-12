<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataTesting;

class DataTestingController extends Controller
{
    
    public function index(Request $request)
    {
        $data = DataTesting::orderBy('created_at', 'DESC')->get();
        
        return view('testing.index', compact('data'));
    }

    public function show(DataTesting $testing)
    {
        return view('testing.show', compact('testing'));
    }

    public function create()
    {
        return view('testing.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'jujur' => 'required',
            'wibawa' => 'required',
            'hafalan_imriti' => 'required',
            'tangkas' => 'required',
            'ulet' => 'required',
            'disiplin' => 'required',
            'keterangan' => 'required',
        ]);

        DataTesting::create([
            'jujur' => $request->jujur,
            'wibawa' => $request->wibawa,
            'hafalan_imriti' => $request->hafalan_imriti,
            'tangkas' => $request->tangkas,
            'ulet' => $request->ulet,
            'disiplin' => $request->disiplin,
            'keterangan' => $request->keterangan,
        ]);

        return redirect('/data-testing')->with('status', 'Data Testing Berhasil Ditambah');
    }

    public function edit(DataTesting $testing)
    {
        return view('testing.edit', compact('testing'));
    }

    public function update(Request $request, DataTesting $testing)
    {
        $request->validate([
            'jujur' => 'required',
            'wibawa' => 'required',
            'hafalan_imriti' => 'required',
            'tangkas' => 'required',
            'ulet' => 'required',
            'disiplin' => 'required',
            'keterangan' => 'required',
        ]);

        $testing->update([
            'jujur' => $request->jujur,
            'wibawa' => $request->wibawa,
            'hafalan_imriti' => $request->hafalan_imriti,
            'tangkas' => $request->tangkas,
            'ulet' => $request->ulet,
            'disiplin' => $request->disiplin,
            'keterangan' => $request->keterangan,
        ]);

        return redirect('/data-testing')->with('status', 'Data Testing Berhasil Diubah');
    }

    public function destroy(DataTesting $testing)
    {
        $testing->delete();

        return redirect('/data-testing')->with('status', 'Data Testing Berhasil Dihapus');
    }
}
