<?php

namespace App\Employees;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class Employee extends Authenticatable
{
    use Notifiable, SoftDeletes, HasRoles;

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
        'phone',
        'username',
        'status',
        'password',
        'remember_token',
    ];

    protected $dates = ['deleted_at'];

    public function getFullNameAttribute()
    {
        return "{$this->firstName} {$this->middleName} {$this->lastName}";
    }
}