<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";

    protected $fillable = [
        'title',
        'alias',
        'description',
        'thumb',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'home_display',
        'sort',
        'status',
        'language_id',
        'parent_id',
        'user_id_create',
        'user_id_modify',
        'layout_id',
        'is_trash'
    ];


    public function language(){
        return $this->belongsTo('App\Model\Language');
    }


    public function parent(){
        return $this->belongsTo('App\Model\Category','parent_id');
    }

    public function children() {
        return $this->hasMany('App\Model\Category', 'parent_id');
    }



    public function Layout(){
        return $this->belongsTo('App\Model\Layout','layout_id');
    }

    public function User(){

        return $this->belongsTo('App\User','user_id_create');
    }

    public function User2(){
        return $this->belongsTo('App\User' ,'user_id_modify');
    }

    public function Article(){
       // return $this->hasMany('App\Model\Article');
        return $this->belongsToMany('App\Model\Article','category_article');
    }
}
