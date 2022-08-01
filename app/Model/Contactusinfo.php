<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Contactusinfo extends Model
{
    protected $table = "contactusinfos";

    protected $fillable = [
        'fax',
        'email',
        'phone1',
        'phone2',
        'address_1',
        'address_2',
        'about_us',
        'googlemap',
        'alias',
        'sort',
        'status',
        'is_trash',
        'language_id'
    ];

    public function language(){
        return $this->belongsTo('App\Model\Language');
    }

}
