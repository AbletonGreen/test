<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Region;

class RegionsController extends Controller
{
	public function index(){
		return view('dashboard.regions');
	}
	
    public function create()
	{
		return view('dashboard.region');
	}
	
	public function store()
	{
	
		Region::create(request(['name']));
		
		return redirect('/dashboard/regions');
	}
}
