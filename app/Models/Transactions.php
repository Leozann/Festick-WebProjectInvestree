<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'ticket_id',
        'ticket_quantity',
        'total_price',
        'transaction_status',
    ];
    protected $guarded = [
        'id',
    ];

    public function ticket(){
        return $this->belongsTo(Tickets::class, 'ticket_id', 'id');
    }

    public function user(){
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
}
