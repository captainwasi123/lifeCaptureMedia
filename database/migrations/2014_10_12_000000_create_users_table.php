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
        Schema::create('tbl_users_info', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname')->nullable();
            $table->string('username')->nullable()->unique();
            $table->string('email')->unique();
            $table->integer('status')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('dob');
            $table->string('password');
            $table->longText('addressline01')->nullable();
            $table->longText('addressline02')->nullable();
            $table->string('state')->nullable();
            $table->string('zipcode')->nullable();
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
        Schema::dropIfExists('tbl_users_info');
    }
}
