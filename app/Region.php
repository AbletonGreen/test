<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Profile;

class Region extends Model
{
    protected $fillable = ['name'];
	
	public function profile()
	{
		return $this->hasMany(Profile::class);
	}
}
