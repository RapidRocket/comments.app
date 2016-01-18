<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPosts extends Model
{
    protected $fillable = [

        'user_id',
        'name',
        'body',
        'deleted'

    ];
}
