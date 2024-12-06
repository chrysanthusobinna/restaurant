<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameRestaurantWorkinghoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Rename the table
        Schema::rename('restaurant_workinghours', 'restaurant_working_hours');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Revert the table name back to its original
        Schema::rename('restaurant_working_hours', 'restaurant_workinghours');
    }
}
