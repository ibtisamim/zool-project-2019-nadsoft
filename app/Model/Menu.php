<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = "menus";

    protected $fillable = [
        'title',
        'description',
        'alias',
        'alias',
        'status',
        'is_trash'
    ];

    public function Menu_item(){
        return $this->hasMany('App\Model\Menu_item');
    }
}
