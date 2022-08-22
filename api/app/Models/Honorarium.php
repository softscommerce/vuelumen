<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Honorarium extends Model
{
    use HasFactory;

    public function workstation()
    {
        return $this->belongsTo('App\Models\WorkStation','workstation_id');
    }

    
}
