<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Categories_banner extends Model
{

    protected $table = "categories_banners";

    protected $fillable = [
        'title',
        'description',
        'language_id',
        'thumb',
        'alias',
        'meta_title',
        'meta_description',
        'status',
        'is_trash',
        'sort',
        'user_id_create',
        'user_id_modify',
        'parent_id'
    ];


    public function language(){
        return $this->belongsTo('App\Model\Language');
    }

    public function banner(){
        return $this->hasMany('App\Model\Banner');
    }


    /*

    public function Categories_banner(){
        return $this->hasOne('App\Model\Categories_banner');
    }

*/

    public function parent(){
        return $this->belongsTo('App\Model\Categories_banner','parent_id');
    }

    public function children() {
        return $this->hasMany('App\Model\Categories_banner', 'parent_id');
    }


    public function User(){
        return $this->belongsTo('App\User','user_id_create');
    }

    public function User2(){
        return $this->belongsTo('App\User' ,'user_id_modify');
    }

}
