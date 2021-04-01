<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTblPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::table('tbl_posts', function (Blueprint $table) {
            $table->foreign('catid')->references('id')->on('tbl_category');
            $table->foreign('created_by')->references('id')->on('tbl_user');
            $table->foreign('parentid')->references('id')->on('tbl_posts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
