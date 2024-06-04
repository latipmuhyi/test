<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];



    public function customer()
    {
        return $this->hasOne(Customer::class, 'user_id');
    }

    public function merchant()
    {
        return $this->hasOne(Merchant::class, 'user_id');
    }

}
