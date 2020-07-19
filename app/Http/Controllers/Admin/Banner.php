<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\Admin as Controller;

class Banner extends Controller
{
    //
	public function index(){
		
		$data['title']   = 'List Banner Ads';
		$data = array_merge($this->currentUser(), $data);
		return view('backend.content.banner.bannerList',compact('data'));
	}
	
	public function view(){
		
		$data['title']   = 'View Banner Ads';
		$data = array_merge($this->currentUser(), $data);
		return view('backend.content.banner.kategoriAdd',compact('data'));
	}
	
	public function add(){
		$data['title']   = 'Add Banner Ads';
		$data = array_merge($this->currentUser(), $data);
		return view('backend.content.banner.bannerAdd',compact('data'));	
	}
	
	public function update(){
		$data['title']   = 'Update Banner Ads';
		$data = array_merge($this->currentUser(), $data);
		return view('backend.content.banner.bannerAdd',compact('data'));
		//akses resource/views/backend/kategori/kategoriAdd
	}


}