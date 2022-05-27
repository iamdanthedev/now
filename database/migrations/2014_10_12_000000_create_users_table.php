<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
//            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->integer('github_id')->nullable();
            $table->text('github_token')->nullable();
            $table->text('github_refresh_token')->nullable();
        });

        Schema::create('todos', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('text');
            $table->boolean('done');
            $table->dateTime('created_at');
            $table->dateTime('updated_at')->nullable();
            $table->dateTime('done_at')->nullable();
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
};
