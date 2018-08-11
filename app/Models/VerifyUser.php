<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
class VerifyUser extends Model
{
    protected $guarded = [];
 
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
 
}