<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserComments extends Model
{
    protected $fillable = [
        'user_id',
        'post_id',
        'parent_id',
        'body',
        'vote_up',
        'vote_dwn',
        'deleted_at',
        'deleted'

    ];
}
