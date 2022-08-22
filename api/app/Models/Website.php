<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    use HasFactory;

    public function galary_image()
    {
        return $this->hasMany(WebsiteImage::class, 'website_id');
    }

}
