<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profiles extends Model
{
    protected $fillable = [
        'name',
        'birthday',
        'description',
        'phone',
        'city',
        'region',
        'country',
        'gender',
        'owner_id'
    ];

    public function owner()
    {
        return $this->belongsTo(User::class);
    }
}
