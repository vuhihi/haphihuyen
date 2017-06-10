<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVemaybayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vemaybay', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->string('description');
            $table->string('tag');
            $table->text('content');
            $table->string('image');
            $table->string('link');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('vemaybay');
    }
}
