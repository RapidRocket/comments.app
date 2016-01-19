<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [

        'user_id',
        'post_id',
        'parent_id',
        'body',
        'vote_up',
        'vote_dwn',
        'published_at',
        'deleted_at',
        'deleted'

    ];

    protected $dates = ['published_at'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
