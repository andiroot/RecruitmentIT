<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use App\RoleUser;
use App\kerusakan;
class User extends Authenticatable
{
    use EntrustUserTrait;   
    use Notifiable;

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
    public function roleUser()
    {
        return $this->hasOne(RoleUser::class, 'user_id', 'id');
    }
    public function kerusakan(){
        return $this->belongsTo(App\Kerusakan::class,'user_id');
    }
}
