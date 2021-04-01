<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('alias');
            $table->string('title_alias');
            $table->text('introtext');
            $table->text('fulltext');
            $table->integer('state');
            $table->integer('sectionid')->unsigned();
            $table->integer('mask')->unsigned();
            $table->integer('catid');
            $table->string('created');
            $table->integer('created_by');
            $table->string('modified');
            $table->integer('modified_by')->unsigned();
            $table->text('images');
            $table->text('urls');
            $table->integer('parentid');
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
        Schema::dropIfExists('tbl_posts');
    }
}
