<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('shipment');
            $table->string('comodity');
            $table->string('no_invoice');
            $table->string('amount_inv');
            $table->integer('currency_id');
            $table->integer('supplier_id');
            $table->integer('origin_id');
            $table->string('hbl_awb');
            $table->integer('ppjk_id');
            $table->string('vessel');
            $table->string('jumlah_kem');
            $table->string('ship_by');
            $table->date('etd');
            $table->date('eta');
            $table->date('pib');
            $table->date('cc');
            $table->date('eta_aiia');
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
        Schema::dropIfExists('imports');
    }
}
