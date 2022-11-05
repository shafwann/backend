<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DetailData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_data', function (Blueprint $table) {
            $table->id();
            $table->foreignId("users_id");
            $table->string('alamat', 255);
            $table->string('tempat_lahir', 255);
            $table->date('tanggal_lahir');
            $table->foreignId("agama_id");
            $table->string('foto_ktp');
            $table->integer('umur');
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
        Schema::dropIfExists('detail_data');
    }
}
