<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prodi', function (Blueprint $table) {
            //
            $table->id();
            $table->string('image');
            $table->string('name');
            $table->unsignedBigInteger('campus_id');
            $table->foreign('campus_id')->references('id')->on('campus');
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
        Schema::table('prodi', function (Blueprint $table) {
            //
        });
    }
}
