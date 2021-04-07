<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_menu', function (Blueprint $table) {
            $table->id();
            $table->string('menutype');
            $table->string('title');
            $table->string('alias');
            $table->string('note');
            $table->string('path');
            $table->string('link');
            $table->string('type');
            $table->integer('published');
            $table->integer('parent_id')->unsigned();
            $table->integer('level');
            $table->string('checked_out');
            $table->string('checked_out_time');
            $table->string('access');
            $table->string('img');
            $table->string('template_style_id');
            $table->text('params');
            $table->string('lft');
            $table->string('rgt');
            $table->string('home');
            $table->string('language');
            $table->integer('client_id')->unsigned();
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
        Schema::dropIfExists('tbl_menu');
    }
}
