<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('content'); // RTF content
            $table->string('image'); // For storing image path
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
    
};
