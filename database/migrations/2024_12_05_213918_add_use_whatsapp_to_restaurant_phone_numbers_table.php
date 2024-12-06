<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUseWhatsappToRestaurantPhoneNumbersTable extends Migration
{
    public function up()
    {
        Schema::table('restaurant_phone_numbers', function (Blueprint $table) {
            $table->integer('use_whatsapp')->default(0)->after('phone_number');
        });
    }

    public function down()
    {
        Schema::table('restaurant_phone_numbers', function (Blueprint $table) {
            $table->dropColumn('use_whatsapp');
        });
    }
}
