<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblOrderInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_order_info', function (Blueprint $table) {
            $table->id();
            $table->integer('buyer_id');
            $table->integer('no_of_dvd')->nullable();
            $table->integer('no_of_bluray')->nullable();
            $table->string('disc_title');
            $table->double('total_price');
            $table->integer('status');
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
        Schema::dropIfExists('tbl_order_info');
    }
}
