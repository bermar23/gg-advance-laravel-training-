<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    const PRIVACY_PUBLIC = 'public';
    const PRIVACY_PRIVATE = 'private';
    
    protected $fillable = [
        'privacy',
        'content'
    ];
}
