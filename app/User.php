<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Restaurant;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role',
        'firstName',
        'middleName',
        'lastName',
        'email',
        'username',
        'phone',
        'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function restaurant()
    {
        return $this->hasOne(Restaurant::class);
    }


    public function getFullNameAttribute()
    {
        return "{$this->firstName} {$this->middleName} {$this->lastName}";
    }
    public function getRoleAttribute($value)
    {
        return ucfirst($value);
    }

}
