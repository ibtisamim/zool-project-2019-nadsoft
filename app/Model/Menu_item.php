<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Menu_item extends Model
{
    protected $table = "news";

    protected $fillable = [
        'title',
        'alias',
        'description',
        'parent_id',
        'menu_id',
        'sort',
        'status',
        'is_trash',
        'dropdown_level',
        'is_parent',
        'language_id',
        'thumb',
        'user_id_create',
        'user_id_modify'
    ];

    public function language(){
        return $this->belongsTo('App\Model\Language');
    }


    public function Menu(){
        return $this->belongsTo('App\Model\Language','menu_id');
    }


    public function parent(){
        return $this->belongsTo('App\Model\Menu_item','parent_id');
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
}
