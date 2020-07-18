<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Dashboard extends Controller
{
    //
	public function index(){
		
		$data['title']   = 'Welcome to Dashboard!';
		return view('backend.content.home',compact('data'));
	}

}
