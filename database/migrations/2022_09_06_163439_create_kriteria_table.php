<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKriteriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kriteria', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('data_santri_id');
            $table->string('jujur')->nullable();
            $table->string('wibawa')->nullable();
            $table->string('hafalan_imriti')->nullable();
            $table->string('tangkas')->nullable();
            $table->string('ulet')->nullable();
            $table->string('disiplin')->nullable();
            $table->string('keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kriteria');
    }
}
