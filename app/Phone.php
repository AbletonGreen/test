<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $guarded=[];
	public function profile()
	{
		return $this->belongsTo(Profile::class);
	}
	
}
