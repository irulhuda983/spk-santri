<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataTestingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_testing', function (Blueprint $table) {
            $table->id();
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
        Schema::dropIfExists('data_testing');
    }
}
