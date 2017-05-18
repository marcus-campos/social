<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('birthday')->nullable();
            $table->string('description')->nullable();
            $table->string('phone')->nullable();
            $table->string('photo')->nullable();
            $table->string('cover_photo')->nullable();
            $table->string('slug')->nullable();
            $table->string('city')->nullable();
            $table->string('region')->nullable(); //State or Province
            $table->string('country')->nullable();
            $table->enum('gender', ['male', 'female', 'other', 'undefined'])->default('undefined')->nullable();
            $table->integer('owner_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('profiles', function (Blueprint $table) {
            $table->foreign('owner_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
