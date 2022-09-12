<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataSantri;
use App\Models\DataTesting;

class HomeController extends Controller
{

    public function index(Request $request)
    {

        $data = [
            'jml_santri' => DataSantri::count(),
            'jml_training' => DataTesting::count(),
            'jml_admin' => 1,
            'jml_hasil' => DataSantri::count(),
        ];

        return view('home.index', compact('data'));
    }
}
