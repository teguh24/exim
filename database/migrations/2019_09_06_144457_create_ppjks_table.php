<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePpjksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ppjks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('pimpinan');
            $table->string('npwp');
            $table->string('alamat');
            $table->string('tel_fax');
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
        Schema::dropIfExists('ppjks');
    }
}
