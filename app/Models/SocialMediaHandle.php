<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialMediaHandle extends Model
{
    use HasFactory;

    protected $table = 'social_media_handles';

    // Fillable properties for mass assignment
    protected $fillable = [
        'handle',
        'social_media',
    ];
}
