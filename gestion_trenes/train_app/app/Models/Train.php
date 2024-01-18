<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    use HasFactory;

    //A Train has many Tickets
    public function tickets(){
        return $this->hasMany(Ticket::class);
    }

    //Many Trains belong to a single TrainType
    public function train_type() {
        return $this->belongsTo(TrainType::class);
    }
}
