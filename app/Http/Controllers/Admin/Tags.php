<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Tags extends Controller
{
    //
	public function index(){
		
		$data['title']   = 'List Tags';
		return view('backend.content.tags.tagsList',compact('data'));
	}
	
	public function view(){
		
		$data['title']   = 'View Tags';
		return view('backend.content.tags.tagsView',compact('data'));
	}
	
	public function add(){
		$data['title']   = 'Add Tags';
		return view('backend.content.tags.tagsAdd',compact('data'));	
	}
	
	public function update(){
		$data['title']   = 'Update Tags';
		return view('backend.content.tags.tagsAdd',compact('data'));
	}

}
