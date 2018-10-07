<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddToAllThisIsByPass extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('forms', function ($table){
            $table->string('nama');
            $table->string('no_telp');
            $table->string('email');
        });
        Schema::table('form_gratifikasis', function ($table){
            $table->string('nama');
            $table->string('no_telp');
            $table->string('email');
        });
        Schema::table('form_benturans', function ($table){
            $table->string('nama');
            $table->string('no_telp');
            $table->string('email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('forms', function ($table){
            $table->dropColumn('nama');
            $table->dropColumn('no_telp');
            $table->dropColumn('email');
        });
        Schema::table('form_gratifikasis', function ($table){
            $table->dropColumn('nama');
            $table->dropColumn('no_telp');
            $table->dropColumn('email');
        });
        Schema::table('form_benturans', function ($table){
            $table->dropColumn('nama');
            $table->dropColumn('no_telp');
            $table->dropColumn('email');
        });
    }
}
