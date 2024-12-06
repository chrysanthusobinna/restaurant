<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantAddressesTable extends Migration
{
    public function up()
    {
        Schema::create('restaurant_addresses', function (Blueprint $table) {
            $table->id();
            $table->string('address');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('restaurant_addresses');
    }
}
