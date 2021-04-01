<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('alias');
            $table->string('title_alias');
            $table->text('introtext');
            $table->text('fulltext');
            $table->integer('state');
            $table->integer('sectionid')->unsigned();
            $table->integer('mask')->unsigned();
            $table->foreign('catid')->references('id')->on('categories');
            $table->string('created');
            $table->foreign('created_by')->references('id')->on('tbl_users');
            $table->string('modified');
            $table->integer('modified_by')->unsigned();
            $table->text('images');
            $table->text('urls');
            $table->foreign('parentid')->references('id')->on('pages');
            $table->integer('ordering');
            $table->text('metakey');
            $table->text('metadesc');
            $table->text('metadata');
            $table->integer('featured')->unsigned();
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
        Schema::dropIfExists('pages');
    }
}
