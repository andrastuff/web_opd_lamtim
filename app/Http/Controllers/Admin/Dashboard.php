<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\Admin as Controller;

class Dashboard extends Controller
{
    //
	public function index(){
		
		$data['title']   = 'Welcome to Dashboard!';		
		$data = array_merge($this->currentUser(), $data) ;
		
		return view('backend.content.home',compact('data'));
	}

}
