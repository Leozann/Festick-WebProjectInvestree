<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalogue extends Model
{
    use HasFactory;
    protected $fillable = [
        'catalogue_name',
        'catalogue_desc',
        'catalogue_price',
    ];

    protected $guarded = [
        'id'
    ];
}
