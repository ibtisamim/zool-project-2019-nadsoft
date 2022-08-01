<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = "albums";
    protected $fillable = [
        'title',
        'description',
        'alias',
        'language_id',
        'thumb',
        'parent_id',
        'sort',
        'status',
        'is_trash',
        'user_id_create',
        'user_id_modify'
    ];

    public function language(){
        return $this->belongsTo('App\Model\Language');
    }

    public function parent(){
        return $this->belongsTo('App\Model\Album','parent_id');
    }

    public function children() {
        return $this->hasMany(self::class, 'parent_id','id');
    }

    public function User(){

        return $this->belongsTo('App\User','user_id_create');
    }

    public function User2(){
        return $this->belongsTo('App\User' ,'user_id_modify');
    }


    /*
    public function Album(){
        return $this->hasMany('App\Model\Photo');
    }*/


    public function Gallery(){
        return $this->belongsToMany('App\Model\Photo', 'album_photo');
    }
}
