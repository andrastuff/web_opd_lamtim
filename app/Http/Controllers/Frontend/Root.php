<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Root extends Controller
{
    //
	public function index(request $request){
		
		$data['title']   = 'Login';
		$data = array_merge($this->meta(), $data) ;
		
		if(!isset($_COOKIE['access_tokenku'])){
			 
			return view('backend.login',compact('data'));
		}else{
			
			return redirect(url('/admin'));
		}
	}

}