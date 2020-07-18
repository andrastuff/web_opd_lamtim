<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Media extends Controller
{
    //
	public function index(){
		
		$data['title']   = 'List Media';
		return view('backend.content.media',compact('data'));
	}
	
	public function update(){
		$data['title']   = 'Update Media';
		return view('backend.content.mediaAdd',compact('data'));
	}

}
