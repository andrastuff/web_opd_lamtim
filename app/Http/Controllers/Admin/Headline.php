<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\Admin as Controller;

class Headline extends Controller
{
    //
	public function index(){
		
		$data['title']   = 'List Headline';
		$data = array_merge($this->currentUser(), $data);
		return view('backend.content.headlines.headlineList',compact('data'));
	}
	
	public function view(){
		
		$data['title']   = 'View Headline';
		$data = array_merge($this->currentUser(), $data);
		return view('backend.content.headlines.headlineView',compact('data'));
	}
	
	public function add(){
		$data['title']   = 'Add Headline';
		$data = array_merge($this->currentUser(), $data);
		return view('backend.content.headlines.headlineAdd',compact('data'));	
	}
	
	public function update(){
		$data['title']   = 'List Headline';
		$data = array_merge($this->currentUser(), $data);
		return view('backend.content.headlines.headlineList',compact('data'));
		//akses resource/views/backend/kategori/kategoriAdd
	}
}