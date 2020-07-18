<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Headline extends Controller
{
    //
	public function index(){
		
		$data['title']   = 'List Headline';
		return view('backend.content.headlines.headlineList',compact('data'));
	}
	
	public function view(){
		
		$data['title']   = 'View Headline';
		return view('backend.content.headlines.headlineView',compact('data'));
	}
	
	public function add(){
		$data['title']   = 'Add Headline';
		return view('backend.content.headlines.headlineAdd',compact('data'));	
	}
	
	public function update(){
		$data['title']   = 'List Headline';
		return view('backend.content.headlines.headlineList',compact('data'));
		//akses resource/views/backend/kategori/kategoriAdd
	}
}