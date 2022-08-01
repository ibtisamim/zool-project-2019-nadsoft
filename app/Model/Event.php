<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = "events";

    protected $fillable = [
        'event_name',
        'short_description',
        'description',
        'from_date',
        'to_date',
        'alias',
        'sort',
        'status',
        'is_trash',
        'language_id',
        'thumb',
        'user_id_create',
        'user_id_modify'
    ];


    public function language(){
        return $this->belongsTo('App\Model\Language');
    }

    public function User(){

        return $this->belongsTo('App\User','user_id_create');
    }

    public function User2(){
        return $this->belongsTo('App\User' ,'user_id_modify');
    }

}
