<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\Admin as Controller;

class Tags extends Controller
{
    //
	public function index(){
		
		$data['title']   = 'List Tags';
		$data = array_merge($this->currentUser(), $data);
		return view('backend.content.tags.tagsList',compact('data'));
	}
	
	public function view(){
		
		$data['title']   = 'View Tags';
		$data = array_merge($this->currentUser(), $data);
		return view('backend.content.tags.tagsView',compact('data'));
	}
	
	public function add(){
		$data['title']   = 'Add Tags';
		$data = array_merge($this->currentUser(), $data);
		return view('backend.content.tags.tagsAdd',compact('data'));	
	}
	
	public function update(){
		$data['title']   = 'Update Tags';
		$data = array_merge($this->currentUser(), $data);
		return view('backend.content.tags.tagsAdd',compact('data'));
	}

}
