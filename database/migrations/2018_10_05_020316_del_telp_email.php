<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DelTelpEmail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('forms', function ($table){
            $table->dropColumn('no_telp');
            $table->dropColumn('email');
        });
        Schema::table('form_gratifikasis', function ($table){
            $table->dropColumn('no_telp');
            $table->dropColumn('email');
        });
        Schema::table('form_benturans', function ($table){
            $table->dropColumn('no_telp');
            $table->dropColumn('email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}
