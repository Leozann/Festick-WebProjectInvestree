<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable
{
    use HasFactory;
    protected $fillable = [
        'user_image',
        'user_fullname',
        'email',
        'password',
        'user_phone',
        'user_account',
        'user_bank',
        'user_status'
    ];
    protected $guarded = [
        'id',
    ];
}
