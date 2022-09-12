<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Klasifikasi extends Model
{
    
    public $id;
    public $nilai_k;
    public $jujur;
    public $wibawa;
    public $hafalan;

    public function __construct($id, $nilai_k)
    {
        $this->id = $id;
        $this->nilai_k = $nilai_k;
    }

    public function rumus($harian, $mingguan, $bulanan, $aset, $x1, $x2, $x3, $x4)
    {
        $hasil = sqrt( (pow(((int) $harian - $x1), 2)) + (pow(((int) $mingguan -$x2), 2)) + (pow(((int) $bulanan - $x3), 2)) + (pow(((int) $aset - $x4), 2)) );

        return $hasil;
    }
}
