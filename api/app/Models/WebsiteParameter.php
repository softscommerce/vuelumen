<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WebsiteParameter extends Model
{
    public function favicon()
    {
    	if($this->favicon)
    	{
    		return 'storage/favicon/' . $this->favicon;
    	}
    	else
    	{
    		return 'img/favicon.ico';
    	}
    }

    public function logo()
    {
    	if($this->logo)
    	{
    		return 'storage/logo/' . $this->logo;
    	}
    	else
    	{
    		return 'img/logo.png';
    	}
    }
}
