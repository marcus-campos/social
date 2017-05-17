<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_tags', function (Blueprint $table) {
            $table->integer('profiles_id')->unsigned();
            $table->integer('tags_id')->unsigned();
        });

        Schema::table('profile_tags', function (Blueprint $table) {
            $table->foreign('profiles_id')->references('id')->on('profiles');
            $table->foreign('tags_id')->references('id')->on('tags');
        });
    }

    /**l
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profile_tags');
    }
}
