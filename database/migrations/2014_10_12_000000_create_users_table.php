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
            // $table->string('lastname');
            // $table->string('username');
            // $table->integer('phone');


            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('phone');


            $table->string('address');
            $table->string('role_id')->default(2);

            $table->rememberToken();
            $table->timestamps();
        });
        // Schema::create('foodlists', function (Blueprint $table) {

        //     $table->id();
        //     $table->string('name');
        //     $table->string('price');
        //     $table->string('category');
        //     $table->string('image')->nullable();
        //     $table->boolean('status')->default(true);

        //     $table->timestamps();
        // });
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