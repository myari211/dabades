<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pendamping extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendamping', function(Blueprint $table){
            $table -> id();
            $table -> string('nama');
            $table -> string('gender');
            $table -> string('agama');
            $table -> string('tempat_lahir');
            $table -> string('tanggal_lahir');
            $table -> string('pendidikan');
            $table -> string('alamat');
            $table -> string('email');
            $table -> string('foto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
