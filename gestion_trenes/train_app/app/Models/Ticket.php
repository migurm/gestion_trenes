<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    //Many Tickets belong to a single TicketType
    public function ticket_type() {
        return $this->belongsTo(TicketType::class);
    }

    //Many Tickets belong to a single Train
    public function train() {
        return $this->belongsTo(Train::class);
    }
}
