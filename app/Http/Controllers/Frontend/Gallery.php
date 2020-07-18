<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Gallery extends Controller
{
    //
	public function index(){
		
		$data['title']   = 'Gallery SKPD';
		$data = array_merge($this->meta(), $data) ;
		if($data['template'] != ''){
			return view('frontend.'.$data['template'].'.content.gallery',compact('data'));
		}else{
			return view('frontend.modern.content.gallery',compact('data'));	
		}
	}

}
