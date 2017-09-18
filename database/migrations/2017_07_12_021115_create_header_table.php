<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeaderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('header', function (Blueprint $table) {
          $table->increments('id');
          $table->string('titlehead');
          $table->string('deschead');
          $table->string('imgback');
          $table->string('imgvid');
          $table->string('link');
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
        Schema::drop('header');
    }
}
