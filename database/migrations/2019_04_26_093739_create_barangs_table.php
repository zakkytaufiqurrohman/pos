<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->increments('id_barang');
            $table->integer('id_supliyer')->unsigned();
            $table->foreign('id_supliyer')->references('id_supliyer')->on('supliyers')->onDelete('cascade');
            $table->integer('id_category')->unsigned();
            $table->foreign('id_category')->references('id_category')->on('categories')->onDelete('cascade');
            $table->string('nama_barang');
            $table->double('stok');
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
        Schema::dropIfExists('barangs');
    }
}
