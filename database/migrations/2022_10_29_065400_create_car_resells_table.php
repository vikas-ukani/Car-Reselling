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
        Schema::create('car_resells', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->comment('Car name');
            $table->string('type', 20)->default('Normal Car')->comment('Car Type');
            $table->float('price')->comment('Car Price');
            $table->integer('top_speed')->comment('Car Top Speed');
            $table->bigInteger('user_id')->nullable()->comment('Car Belongs to user.');
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
        Schema::dropIfExists('car_resells');
    }
};
