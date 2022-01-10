<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->string('name',50);
            $table->string('image')->nullable();
            $table->string('email',100)->unique();
            $table->boolean('is_admin')->default(0);
            $table->string('oauth_token',255)->nullable();
            $table->string('access_token',64)->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password',191);
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
