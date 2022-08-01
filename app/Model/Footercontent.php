<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Footercontent extends Model
{
    protected $table = "footercontents";

    protected $fillable = [
        'column_first_content',
        'column_seconed_content',
        'column_third_content',
        'column_fourth_content'
    ];
}
