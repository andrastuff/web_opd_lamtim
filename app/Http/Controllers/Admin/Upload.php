<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\Admin as Controller;

class Upload extends Controller
{
    //
	public function index(){
		
		$data['title']   = 'Upload File';
		$data = array_merge($this->currentUser(), $data);
		return view('backend.content.upload.uploadList',compact('data'));
	}
	
	public function view(){
		
		$data['title']   = 'Upload File';
		$data = array_merge($this->currentUser(), $data);

		return view('backend.content.upload.uploadView',compact('data'));
	}
	
	public function add(){
		$data['title']   = 'Upload File';
		$data = array_merge($this->currentUser(), $data);

		return view('backend.content.upload.uploadAdd',compact('data'));	
	}
	
	public function update(){
		$data['title']   = 'Upload File';
		$data = array_merge($this->currentUser(), $data);

		return view('backend.content.upload.uploadAdd',compact('data'));
	}

}
