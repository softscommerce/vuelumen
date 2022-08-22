<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkRequest extends Model
{
    use HasFactory;

    public function client()
    {
        return $this->belongsTo(User::class, 'service_profile_client_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function applicant(){
        return $this->belongsTo(SoftcomJobCandidate::class, 'applicant_id');
    }

    public function service(){
        return $this->belongsTo(ServiceProfile::class, 'service_profile_id')->select('id','name');
    }
}
