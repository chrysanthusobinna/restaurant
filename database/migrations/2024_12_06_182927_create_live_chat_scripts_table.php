<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLiveChatScriptsTable extends Migration
{
    public function up()
    {
        Schema::create('live_chat_scripts', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // e.g., Tawk.to or Smartsupp
            $table->text('script_code'); // Stores the script code
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('live_chat_scripts');
    }
}
