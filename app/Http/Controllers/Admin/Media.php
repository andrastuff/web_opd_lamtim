<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\Admin as Controller;

class Media extends Controller
{
    //
	public function index(){
		
		$data['title']   = 'List Media';
		$data = array_merge($this->currentUser(), $data);
		return view('backend.content.media',compact('data'));
	}
	
	public function update(){
		$data['title']   = 'Update Media';
		$data = array_merge($this->currentUser(), $data);
		return view('backend.content.mediaAdd',compact('data'));
	}

}
