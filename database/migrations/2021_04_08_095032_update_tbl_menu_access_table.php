<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTblMenuAccessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tbl_menu_access', function (Blueprint $table) {
            
            $table->string('method');
            $table->text('uri');
            $table->string('name');
            $table->string('action');
            $table->boolean('status')->default(1);
            $table->boolean('delete')->default(0);
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
