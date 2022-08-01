<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = "articles";
    protected $fillable = [
        'title',
        'sub_title',
        'alias',
        'short_description',
        'description',
        'publishing_date',
        'from_date',
        'to_date',
        'language_id',
        'author_id',
        'thumb',
        'user_id_create',
        'user_id_modify',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'sort',
        'status',
        'is_trash',
        'preview',
        'main_image_first',
        'main_image2',
        'main_image3',
        'uploadfile',
        'activation',
        'waterMark_activation',
        'views'
    ];


    public function language(){
        return $this->belongsTo('App\Model\Language');
    }

    public function author(){
        return $this->belongsTo('App\Model\Author','author_id');
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

    public function Category(){
      //  return $this->belongsTo('App\Model\Category' ,'category_id');
        return $this->belongsToMany('App\Model\Category','category_article');
    }

}
