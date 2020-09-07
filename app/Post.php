<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $casts = [
        'published_at' => 'datetime',
        'unlisted_at' => 'datetime',
    ];
}
