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

        Schema::create('shop', function (Blueprint $table) {
            $table->bigIncrements('shop_id');
            $table->string('name');
            $table->string('method');

           $table->bigInteger('suser_id')->unsigned();
            $table->foreign('suser_id')
                  ->references('shop_id')
                  ->on('shop_users')->onDelete('cascade');

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
        Schema::dropIfExists('shop');
    }
};
