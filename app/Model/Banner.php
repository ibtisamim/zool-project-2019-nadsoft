<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table = "banners";

    protected $fillable = [
        'title',
        'alias',
        'description',
        'link',
        'status',
        'sort',
        'is_trash',
        'open_newtab',
        'from_date',
        'to_date',
        'language_id',
        'category_id',
        'photo_id',
        'photo_id_inner',
        'user_id_create',
        'user_id_modify'
    ];


    public function language(){
        return $this->belongsTo('App\Model\Language');
    }

    public function Categories_banner(){
        return $this->belongsTo('App\Model\Categories_banner' , 'category_id');
    }

    public function User(){
        return $this->belongsTo('App\User','user_id_create');
    }

    public function User2(){
        return $this->belongsTo('App\User' ,'user_id_modify');
    }

}
