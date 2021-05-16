<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Ipgeolocation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ipaddress', function (Blueprint $table) {
            //
            $table->id();
            $table->string("city");
            $table->string("country");
            $table->double('lat');
            $table->double("lon");
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
        Schema::table('ipaddress', function (Blueprint $table) {
            //
        });
    }
}
