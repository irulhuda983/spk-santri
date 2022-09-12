<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataSantri;
use App\Models\DataTesting;

class KlasifikasiController extends Controller
{
    
    public function index(Request $request)
    {
        $santri = DataSantri::all();

        return view('klasifikasi.index', compact('santri'));
    }

    public function show(Request $request)
    {
        $training = $this->getdataTesting($request->santri);
        $uji = $this->getDataUji($request->santri, $request->nilai_k);

        return view('klasifikasi.show', compact('training', 'uji'));
    }

    public function getDataUji($id, $nilai_k)
    {
        $tes = DataSantri::select('data_santri.*', 'kriteria.jujur', 'kriteria.wibawa', 'kriteria.hafalan_imriti', 'kriteria.tangkas', 'kriteria.ulet', 'kriteria.disiplin')
                                ->join('kriteria', 'data_santri.id', '=', 'kriteria.data_santri_id')
                                ->where('data_santri.id', $id)
                                ->first();

        $data = [
            'nama' => $tes->nama,
            'jenis_kelamin' => $tes->jenis_kelamin,
            'tanggal_lahir' => date('d F Y', strtotime($tes->tanggal_lahir)),
            'jujur' => $tes->jujur,
            'wibawa' => $tes->wibawa,
            'hafalan_imriti' => $tes->hafalan_imriti,
            'tangkas' => $tes->tangkas,
            'ulet' => $tes->ulet,
            'disiplin' => $tes->disiplin,
            'kesimpulan' => $this->getKesimpulan($id, $nilai_k),
        ];

        return $data;

    }

    public function getdataTesting($id)
    {
        $tes = DataSantri::select('data_santri.*', 'kriteria.jujur', 'kriteria.wibawa', 'kriteria.hafalan_imriti', 'kriteria.tangkas', 'kriteria.ulet', 'kriteria.disiplin')
                                ->join('kriteria', 'data_santri.id', '=', 'kriteria.data_santri_id')
                                ->where('data_santri.id', $id)
                                ->first();

        $training = DataTesting::all();

        $data = [];
        $i = 0;
        $no = 1;

        foreach($training as $train){
            $jarak = $this->rumus($train, $tes);

            array_push($data, [
                'no' => $no++,
                'jujur' => $train->jujur,
                'wibawa' => $train->wibawa,
                'hafalan_imriti' => $train->hafalan_imriti,
                'tangkas' => $train->tangkas,
                'ulet' => $train->ulet,
                'disiplin' => $train->disiplin,
                'keterangan' => $train->keterangan,
                'jarak' => (float) $jarak,
            ]);

            $i++;
        }

        array_multisort(array_column($data, 'jarak'), SORT_ASC, $data);

        return $data;
    }

    public function getKesimpulan($id, $nilai_k)
    {
        $data = $this->getdataTesting($id);
        $i = 0;
        $k5 = [];
        $mayor = [];
        $kesimpulan = '';

        foreach($data as $train){
            if($i < (int) $nilai_k){
                array_push($k5, $train);
            }

            $i++;
        }

        foreach($k5 as $tes){
            array_push($mayor, $tes['keterangan']);
        }

        $hitung = array_unique($mayor);
        $result = array_count_values($mayor);

        $max = 0;

        foreach($hitung as $v){
            if($result[$v] > $max){
                $kesimpulan = $v;
                $max = $result[$v];
            }
        }

        return $kesimpulan;
    }

    public function rumus($train, $tes)
    {
        $jujur = $train->jujur;
        $wibawa = $train->wibawa;
        $hafalan = $train->hafalan_imriti;
        $tangkas = $train->tangkas;
        $ulet = $train->ulet;
        $disiplin = $train->disiplin;

        $tes_jujur = $tes->jujur;
        $tes_wibawa = $tes->wibawa;
        $tes_hafalan = $tes->hafalan_imriti;
        $tes_tangkas = $tes->tangkas;
        $tes_ulet = $tes->ulet;
        $tes_disiplin = $tes->disiplin;
        
        $hasil_jujur = (pow(((int) $jujur - (int) $tes_jujur), 2));
        $hasil_wibawa = (pow(((int) $wibawa - (int) $tes_wibawa), 2));
        $hasil_hafalan = (pow(((int) $hafalan - (int) $tes_hafalan), 2));
        $hasil_tangkas = (pow(((int) $tangkas - (int) $tes_tangkas), 2));
        $hasil_ulet = (pow(((int) $ulet - (int) $tes_ulet), 2));
        $hasil_disiplin = (pow(((int) $disiplin - (int) $tes_disiplin), 2));

        $arr_hasil = [$hasil_jujur, $hasil_wibawa, $hasil_hafalan, $hasil_tangkas, $hasil_ulet, $hasil_disiplin];

        $hasil = sqrt( array_sum($arr_hasil) );

        return $hasil;

        // return  [
        //     'jujur' => $hasil_jujur,
        //     'wibawa' => $hasil_wibawa,
        //     'hafalan' => $hasil_hafalan,
        //     'tangkas' => $hasil_tangkas,
        //     'ulet' => $hasil_ulet,
        //     'disiplin' => $hasil_disiplin,
        //     'total' => array_sum($arr_hasil),
        //     'hasil' => (float) $hasil,
        // ];
    }
}
