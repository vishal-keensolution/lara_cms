<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_category', function (Blueprint $table) {
            $table->id();
            $table->integer('parentid');
            $table->integer('level')->unsigned();
            $table->string('extension');
            $table->string('title');
            $table->string('alias');
            $table->string('description');
            $table->integer('published');
            $table->string('params');
            $table->string('metadesc');
            $table->string('metakey');
            $table->string('metadata');
            $table->string('modified');
            $table->integer('created_user_id');
            $table->text('created_time');
            $table->integer('modified_user_id')->unsigned();
            $table->integer('modified_time');
            $table->string('cat_for_component');
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
        Schema::dropIfExists('tbl_category');
    }
}
