<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;



use App\Permissions\HasPermissionsTrait;


class User extends Authenticatable
{
    use Notifiable , HasPermissionsTrait;
  //  use Notifiable, Authorizable, CanResetPassword, ;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function News(){
        return $this->hasMany('App\Model\News');
    }


    public function Article(){
        return $this->hasMany('App\Model\Article');
    }

    public function Category(){
        return $this->hasMany('App\Model\Category');
    }

}
