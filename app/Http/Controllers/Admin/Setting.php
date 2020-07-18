<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Setting extends Controller
{
    //
	public function index(){
		
		$data['title']   = 'Website Setting';
		return view('backend.content.setting',compact('data'));
	}

}
