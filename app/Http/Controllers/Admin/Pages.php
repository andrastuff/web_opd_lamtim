<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Pages extends Controller
{
    //
	public function index(){
		
		$data['title']   = 'List Pages';
		return view('backend.content.pages.pagesList',compact('data'));
	}
	
	public function view(){
		
		$data['title']   = 'View pages';
		return view('backend.content.pages.pagesView',compact('data'));
	}
	
	public function add(){
		$data['title']   = 'Add pages';
		return view('backend.content.pages.pagesAdd',compact('data'));	
	}
	
	public function update(){
		$data['title']   = 'Update pages';
		return view('backend.content.pages.pagesAdd',compact('data'));
	}

}
