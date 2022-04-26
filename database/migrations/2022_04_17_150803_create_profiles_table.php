<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->date('date_of_birth')->nullable();
            $table->string('course')->nullable();
            $table->string('student_id')->nullable();
            $table->string('department')->nullable();
            $table->integer('phone')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->integer('address')->nullable();
            $table->string('zip')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('profiles');
    }
}
