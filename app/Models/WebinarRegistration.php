<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WebinarRegistration extends Model
{
    protected $fillable = ['full_name', 'email', 'phone', 'source'];

    public const SOURCE_OPTIONS = [
        'social_media' => 'Social Media',
        'friend' => 'Friend / Word of Mouth',
        'email' => 'Email Newsletter',
        'website' => 'Koje Website',
        'event' => 'Attended a Previous Event',
        'other' => 'Other',
    ];
}
