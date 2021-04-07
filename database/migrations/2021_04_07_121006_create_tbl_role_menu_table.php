<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblRoleMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_role_menu', function (Blueprint $table) {
            $table->id();
            $table->biginteger('menuid')->unsigned(); 
            $table->biginteger('roleid')->unsigned(); 
            $table->timestamps();
            $table->foreign('menuid')->references('id')->on('tbl_menu'); 
            $table->foreign('roleid')->references('id')->on('tbl_role'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_role_menu');
    }
}
