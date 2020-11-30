<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * @return void */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('name',30)->nullable(false);
            $table->string('lastname',30)->nullable(false);
            $table->string('email')->unique()->nullable(false);
            $table->unsignedBigInteger('role_id')->nullable(false);
            $table->foreign('role_id')->references('id')->on('roles');
            $table->string('password')->nullable(false);
            $table->timestamps();
            $table->engine='InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
