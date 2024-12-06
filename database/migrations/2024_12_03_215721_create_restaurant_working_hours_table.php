<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantWorkinghoursTable extends Migration
{
    public function up()
    {
        Schema::create('restaurant_workinghours', function (Blueprint $table) {
            $table->id();
            $table->string('working_hours');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('restaurant_workinghours');
    }
}
