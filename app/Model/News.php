<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = "news";

    protected $fillable = [
        'title',
        'short_description',
        'description',
        'language_id',
        'thumb',
        'alias',
        'meta_title',
        'youtube_url',
        'meta_description',
        'status',
        'sort',
        'is_trash',
        'thumb_display',
        'user_id_create',
        'user_id_modify'
    ];

    public function language(){
        return $this->belongsTo('App\Model\Language');
    }

    public function state(){
        return $this->belongsTo('App\Model\State');
    }

    public function User(){
       return $this->belongsTo('App\User','user_id_create');
    }

    public function User2(){
        return $this->belongsTo('App\User' ,'user_id_modify');
    }
}
