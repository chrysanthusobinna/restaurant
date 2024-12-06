<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantPhonenumbersTable extends Migration
{
    public function up()
    {
        Schema::create('restaurant_phonenumbers', function (Blueprint $table) {
            $table->id();
            $table->string('phone_number');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('restaurant_phonenumbers');
    }
}
