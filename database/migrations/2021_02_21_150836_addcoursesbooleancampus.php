<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Addcoursesbooleancampus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('campus', function (Blueprint $table) {
            //
            $table->boolean('hasMI');
            $table->boolean('hasAK');
            $table->boolean('hasAB');
            $table->boolean('hasHUMAS');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('campus', function (Blueprint $table) {
            //
        });
    }
}
