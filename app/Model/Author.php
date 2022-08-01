<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table = "authors";

    protected $fillable = [
        'title',
        'alias',
        'description',
        'language_id',
        'thumb',
        'is_trash'
    ];



    public function Article(){
        return $this->hasMany('App\Model\Article');
    }


}
