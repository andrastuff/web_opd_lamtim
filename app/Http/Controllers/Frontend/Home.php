<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Home extends Controller
{
    //
	public function index(){
		
			
		$data['title']  = 'Selamat Datang';
		$data = array_merge($this->meta(), $data) ;
		$data = array_merge($this->slider(), $data) ;
		if($data['template'] != ''){
			return view('frontend.'.$data['template'].'.content.home',compact('data'));
		}else{
			return view('frontend.modern.content.home',compact('data'));	
		}
	}

}
