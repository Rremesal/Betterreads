<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->text('picture_path');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->date('date_of_birth')->nullable();
            $table->string('gender')->nullable();
            $table->string('twitter_url')->unique()->nullable();
            $table->string('website_url')->unique()->nullable();
            $table->string('profile_url')->unique()->nullable();
            $table->boolean('isAuthor')->default(0);
            $table->boolean('isAdmin')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
