<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MultiPayment extends Model
{
    use HasFactory;
    protected $fillable = [
        'mp_logo',
        'mp_method',
        'mp_account_number'
    ];

    protected $guarded = [
        'id'
    ];
}
