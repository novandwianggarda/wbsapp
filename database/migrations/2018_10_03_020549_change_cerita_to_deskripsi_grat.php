<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeCeritaToDeskripsiGrat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('form_gratifikasis', function(Blueprint $table) {
            $table->renameColumn('cerita', 'deskripsi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('form_gratifikasis', function(Blueprint $table) {
            $table->renameColumn('deskripsi', 'cerita');
        });
    }
}
