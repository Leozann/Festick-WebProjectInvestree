<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tickets extends Model
{
    use HasFactory;
    protected $fillable = [
        'ticket_image',
        'ticket_image_landscape',
        'ticket_name',
        'ticket_desc',
        'ticket_startfrom',
        'ticket_schedule',
        'ticket_location',
        'ticket_organizer',
        'catalogue_id',
        'ticket_status',
    ];
    protected $guarded = [
        'id',
    ];

    public function catalogue(){
        return $this->belongsTo(Catalogue::class, 'catalogue_id', 'id');
    }
}
