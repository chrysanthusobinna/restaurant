<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameRestaurantPhonenumbersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Drop the old table
        Schema::dropIfExists('restaurant_phonenumbers');

        // Create the new table with the correct naming convention
        Schema::create('restaurant_phone_numbers', function (Blueprint $table) {
            $table->id();
            $table->string('phone_number');
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
        // Drop the new table
        Schema::dropIfExists('restaurant_phone_numbers');

        // Recreate the old table
        Schema::create('restaurant_phonenumbers', function (Blueprint $table) {
            $table->id();
            $table->string('phone_number');
            $table->timestamps();
        });
    }
}
