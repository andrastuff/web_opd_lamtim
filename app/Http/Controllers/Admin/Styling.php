<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Styling extends Controller
{
    //
	public function index(){
		
		$data['title']   = 'Content Styling';
		return view('backend.content.styling',compact('data'));
	}

}
