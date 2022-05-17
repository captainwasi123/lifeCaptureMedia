<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblUserCartInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_user_cart_info', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('no_of_dvd')->nullable();
            $table->integer('no_of_bluray')->nullable();
            $table->string('disc_title')->nullable();
            $table->double('total_price')->nullable();
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
        Schema::dropIfExists('tbl_user_cart_info');
    }
}
