<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormBenturansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_benturans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_pelaku');
            $table->string('nip_pelaku');
            $table->string('jabatan');
            $table->longText('cerita');
            $table->string('bukti');
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
        Schema::dropIfExists('form_benturans');
    }
}
