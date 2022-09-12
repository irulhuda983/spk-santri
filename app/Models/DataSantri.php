<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataSantri extends Model
{
    use HasFactory;

    protected $table = 'data_santri';

    protected $guarded = ['id'];

    public function kriteria()
    {
        return $this->hasOne(Kriteria::class);
    }
}
