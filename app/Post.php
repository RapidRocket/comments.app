<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [

        'user_id',
        'title',
        'excerts',
        'body',
        'published_at',
        'deleted'

    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
