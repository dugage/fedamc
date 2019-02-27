<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studends', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('idUser');
            $table->unsignedInteger('idTeacher');
            $table->string('name');
            $table->string('lastname')->nullable();
            $table->string('email')->unique();
            $table->integer('phone')->nullable();
            $table->string('address')->nullable();
            $table->date('birdDate')->nullable();
            $table->string('cp')->nullable();
            $table->string('city')->nullable();
            $table->string('club')->nullable();
            $table->string('activity')->nullable();
            $table->string('license')->nullable();
            $table->date('startLicense')->nullable();
            $table->date('endLicense')->nullable();
            $table->foreign('idUser')->references('id')->on('users');
            $table->foreign('idTeacher')->references('id')->on('teachers');
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
        Schema::table('studends', function (Blueprint $table) {
            $table->dropForeign(['idUser']);
            $table->dropForeign(['idTeacher']);
            $table->dropColumn(['idUser','idTeacher']);
        });
        Schema::dropIfExists('studends');
    }
}
