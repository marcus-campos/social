<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $fillable = [
        'name',
        'content',
        'like',
        'profiles_id'
    ];

    public function profile()
    {
        return $this->belongsTo(Profiles::class, 'profiles_id');
    }
}
