<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Contact extends Controller
{
    //
	public function index(){
		
		$data['title']   = 'Kontak Kami';
		$data = array_merge($this->meta(), $data) ;
		
		if($data['template'] != ''){
			return view('frontend.'.$data['template'].'.content.contact',compact('data'));
		}else{
			return view('frontend.modern.content.contact',compact('data'));	
		}
	}

}
