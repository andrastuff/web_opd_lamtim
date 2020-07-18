<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Banner extends Controller
{
    //
	public function index(){
		
		$data['title']   = 'List Banner Ads';
		return view('backend.content.banner.bannerList',compact('data'));
	}
	
	public function view(){
		
		$data['title']   = 'View Banner Ads';
		return view('backend.content.banner.kategoriAdd',compact('data'));
	}
	
	public function add(){
		$data['title']   = 'Add Banner Ads';
		return view('backend.content.banner.bannerAdd',compact('data'));	
	}
	
	public function update(){
		$data['title']   = 'Update Banner Ads';
		return view('backend.content.banner.bannerAdd',compact('data'));
		//akses resource/views/backend/kategori/kategoriAdd
	}


}