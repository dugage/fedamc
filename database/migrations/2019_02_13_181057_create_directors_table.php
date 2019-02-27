<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDirectorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('directors', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('idUser');
            $table->string('name');
            $table->string('lastname')->nullable();
            $table->string('profilePicture')->nullable()->default('images/users/user.jpg');
            $table->string('email')->unique();
            $table->boolean('active')->nullable()->default('1');
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
        Schema::table('directors', function (Blueprint $table) {
            $table->dropForeign('directors_idUser_foreign');
            $table->dropColumn('idUser');
        });
        Schema::dropIfExists('directors');
    }
}
