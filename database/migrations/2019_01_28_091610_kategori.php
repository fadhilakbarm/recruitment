<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Kategori extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('barang', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kategori_id')->unsigned();
            $table->foreign('kategori_id')->references('id')
                                            ->on('kategori')
                                            ->onDelete('cascade');                                            
            $table->string('nama');
            $table->integer('jumlah');            
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
        //
    }
}
