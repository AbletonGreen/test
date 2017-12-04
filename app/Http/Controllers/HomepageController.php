<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\Region;

class HomepageController extends Controller
{
    public function index(Profile $profile)
	{
		$profiles = Profile::latest()->get();
		return view('default/index', compact('profiles'));
	}
}
