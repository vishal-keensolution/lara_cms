<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblRoleUserTable extends Migration
{
    /**
     * Run the migrations. 
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_role_user', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned(); 
            $table->foreign('user_id')->references('id')->on('tbl_users'); 
            $table->integer('role_id')->unsigned(); 
            $table->foreign('role_id')->references('id')->on('tbl_role');             
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
        Schema::dropIfExists('tbl_role_user');
    }
}
