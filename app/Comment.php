<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [

        'post_id',
        'parent_id',
        'body',
        'vote_up',
        'vote_dwn',
        'published_at'

    ];


    protected $dates = ['published_at', 'deleted_at'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function post()
    {
        return $this->belongsTo('App\Post');
    }

    public function childrens()
    {
        return $this->hasMany('App\Comment', 'parent_id', 'id');
    }

    public function parent()
    {
        return $this->belongsTo('App\Comment');
    }
}
