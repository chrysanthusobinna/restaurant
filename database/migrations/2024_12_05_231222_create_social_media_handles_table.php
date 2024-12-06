<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialMediaHandlesTable extends Migration
{
    public function up()
    {
        Schema::create('social_media_handles', function (Blueprint $table) {
            $table->id();
            $table->string('handle');
            $table->enum('social_media', ['facebook', 'instagram', 'youtube', 'tiktok']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('social_media_handles');
    }
}
