<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Region;

class Profile extends Model
{
    protected $guarded=[];
	public function region()
	{
		return $this->belongsTo(Region::class);
	}
}
