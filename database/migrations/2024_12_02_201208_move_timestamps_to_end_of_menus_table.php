<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MoveTimestampsToEndOfMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('menus', function (Blueprint $table) {
            $table->dropTimestamps(); // Remove existing timestamps
        });

        Schema::table('menus', function (Blueprint $table) {
            $table->timestamps(); // Re-add timestamps at the end of the table
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('menus', function (Blueprint $table) {
            $table->dropTimestamps(); // Remove timestamps from the end
        });

        Schema::table('menus', function (Blueprint $table) {
            $table->timestamps(); // Re-add timestamps to the original position
        });
    }
}
