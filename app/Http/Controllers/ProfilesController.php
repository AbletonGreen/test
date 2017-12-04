<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Region;
use App\Profile;
use App\Phone;

class ProfilesController extends Controller
{
    public function index(Profile $profiles)
	{
		$profiles = Profile::latest()->get();
		return view('dashboard.profiles', compact('profiles'));
	}
	
	public function create(Region $region)
	{
		$regions = Region::latest()->get();
		return view('dashboard.profile', compact('regions'));
	}
	
	public function store(Request $request)
	{
		$photo = $request->file('file');
		$photo_name = 'images/avatars/' .time().'.'.$request->file->getClientOriginalExtension();
		$photo->move(public_path('images/avatars/'), $photo_name);
		
		$profile = new Profile([
			'name' => $request->get('name'), 
			'lastname' => $request->get('lastname'), 
			'email'=> $request->get('email'), 
			'region_id' => $request->get('region_id'), 
			'file' => $photo_name
			 ]);
		$profile->save();
		
		
		
		return redirect('dashboard/profiles');
	}
	public function api()
	{
		$profiles = Profile::latest()->get();
		return (compact('profiles'));
	}
}
