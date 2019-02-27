<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('idUser');
            $table->string('name');
            $table->string('lastname')->nullable();
            $table->string('email')->unique();
            $table->date('fNacimiento')->nullable();
            $table->integer('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('cp')->nullable();
            $table->string('city')->nullable();
            $table->string('activity')->nullable();
            $table->string('license')->nullable();
            $table->double('rate', 8, 2)->nullable();
            $table->foreign('idUser')->references('id')->on('users');
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
        Schema::table('teachers', function (Blueprint $table) {
            $table->dropForeign(['idUser']);
            $table->dropColumn('idUser');
        });
        Schema::dropIfExists('teachers');
    }
}
