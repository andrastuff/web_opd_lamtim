<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\Admin as Controller;

class Pages extends Controller
{
    //
	public function index(){
		
		$data['title']   = 'List Pages';
		$data = array_merge($this->currentUser(), $data);
		return view('backend.content.pages.pagesList',compact('data'));
	}
	
	public function view(){
		
		$data['title']   = 'View pages';
		$data = array_merge($this->currentUser(), $data);
		return view('backend.content.pages.pagesView',compact('data'));
	}
	
	public function add(){
		$data['title']   = 'Add pages';
		$data = array_merge($this->currentUser(), $data);
		return view('backend.content.pages.pagesAdd',compact('data'));	
	}
	
	public function update(){
		$data['title']   = 'Update pages';
		$data = array_merge($this->currentUser(), $data);
		return view('backend.content.pages.pagesAdd',compact('data'));
	}

}
