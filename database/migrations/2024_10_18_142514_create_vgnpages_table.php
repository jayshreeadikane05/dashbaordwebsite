<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVgnpagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vgnpages', function (Blueprint $table) {
            $table->id(); 
            $table->string('pagename'); 
            $table->string('pageurl')->unique(); 
            $table->unsignedBigInteger('author_id'); 
            $table->timestamps();

            $table->foreign('author_id')->references('id')->on('admin_users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vgnpages');
    }
}
