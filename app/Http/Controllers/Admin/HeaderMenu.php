<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HeaderMenu extends Controller
{
    //
	public function index(){	
		$data['title']   = 'List Header Menu';
		return view('backend.content.headerMenu.headerMenuList',compact('data'));
	}
	
	public function view(){
		
		$data['title']   = 'View Header Menu';
		return view('backend.content.headerMenu.headerMenuList',compact('data'));
	}
	
	public function add(){
		$data['title']   = 'Add Header Menu';
		return view('backend.content.headerMenu.headerMenuAdd',compact('data'));	
	}
	
	public function update(){
		$data['title']   = 'Update Header Menu';
		return view('backend.content.headerMenu.headerMenuAdd',compact('data'));
		//akses resource/views/backend/kategori/kategoriAdd
	}
}