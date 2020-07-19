<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\Admin as Controller;

class Setting extends Controller
{
    //
	public function index(){
		
		$data['title']   = 'Website Setting';
		$data = array_merge($this->currentUser(), $data);
		return view('backend.content.setting',compact('data'));
	}

}
