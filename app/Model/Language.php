<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $table = "languages";

    protected $fillable = [
        'name',
        'code',
        'sort',
        'is_trash'
    ];

    public function news(){
        return $this->hasMany(News::class);
    }

    public function Article(){
        return $this->hasMany('App\Model\Article');
    }

    public function Category(){
        return $this->hasMany('App\Model\Category');
    }

    public function State(){
        return $this->hasMany('App\Model\State');
    }

    public function Contactusinfo(){
        return $this->hasMany('App\Model\Contactusinfo');
    }

    public function Banner(){
        return $this->hasMany('App\Model\Banner');
    }

    public function Categories_banner(){
        return $this->hasMany('App\Model\Categories_banner');
    }

    public function Photo(){
        return $this->hasMany('App\Model\Photo');
    }

    public function web_language(){
        return $this->hasOne('App\Model\Setting', 'id', 'web_default_language');
    }

    public function admin_language(){
        return $this->hasOne('App\Model\Setting', 'id', 'admin_default_language');
    }

    public function Menu_item(){
        return $this->hasMany('App\Model\Menu_item');
    }

    public function SocialLinks(){
        return $this->hasMany('App\Model\Sociallink');
    }

}
