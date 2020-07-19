<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\Admin as Controller;

class Styling extends Controller
{
    //
	public function index(){
		
		$data['title']   = 'Content Styling';
		$data = array_merge($this->currentUser(), $data);
		return view('backend.content.styling',compact('data'));
	}

}
