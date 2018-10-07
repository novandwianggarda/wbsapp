<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStatus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('forms', function ($table){
            $table->string('status');
        });
        Schema::table('form_gratifikasis', function ($table){
            $table->string('status');
        });
        Schema::table('form_benturans', function ($table){
            $table->string('status');
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
            $table->dropColumn('status');
        });
        Schema::table('form_gratifikasis', function ($table){
            $table->dropColumn('status');
        });
        Schema::table('form_benturans', function ($table){
            $table->dropColumn('status');
        });
    }
}
