<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "comments";

    protected $fillable = [
        'user_name',
        'content',
        'ip',
        'status',
        'article_id'
    ];
}
