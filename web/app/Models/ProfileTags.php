<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProfileTags extends Model
{
    protected $fillable = [
        'profiles_id',
        'tags_id'
    ];
}
