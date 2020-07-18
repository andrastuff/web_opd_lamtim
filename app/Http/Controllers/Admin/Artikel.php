<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Artikel extends Controller
{
    //
	public function index(){
		
		$data['title']   = 'List Artikels';
		return view('backend.content.artikel.artikelList',compact('data'));
	}
	
	public function view(){
		
		$data['title']   = 'View Artikel';
		return view('backend.content.artikel.artikelView',compact('data'));
	}
	
	public function add(){
		$data['title']   = 'Add Artikel';
		return view('backend.content.artikel.artikelAdd',compact('data'));	
	}
	
	public function update(){
		$data['title']   = 'Update Artikel';
		return view('backend.content.artikel.artikelAdd',compact('data'));
	}

}
