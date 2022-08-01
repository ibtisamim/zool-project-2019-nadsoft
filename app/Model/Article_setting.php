<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Article_setting extends Model
{
    protected $table = "article_settings";

    protected $fillable = [
        'show_views_no',
        'show_category_name',
        'show_aouthor_name',
        'show_orderby',
        'show_display_no'
];
}
