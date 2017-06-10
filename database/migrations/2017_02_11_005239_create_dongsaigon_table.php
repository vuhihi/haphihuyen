<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDongsaigonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dongsaigon', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->string('description');
            $table->string('tag');
            $table->text('content');
            $table->string('image');
            $table->string('link');
            $table->string('location');
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
        Schema::drop('dongsaigon');
    }
}
