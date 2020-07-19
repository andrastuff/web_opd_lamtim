<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\Admin as Controller;

class Artikel extends Controller
{
    //
	public function index(){
		
		$data['title']   = 'List Artikels';
		$data = array_merge($this->currentUser(), $data);
		return view('backend.content.artikel.artikelList',compact('data'));
	}
	
	public function view(){
		
		$data['title']   = 'View Artikel';
		$data = array_merge($this->currentUser(), $data);
		return view('backend.content.artikel.artikelView',compact('data'));
	}
	
	public function add(){
		$data['title']   = 'Add Artikel';
		$data = array_merge($this->currentUser(), $data);
		return view('backend.content.artikel.artikelAdd',compact('data'));	
	}
	
	public function update(){
		$data['title']   = 'Update Artikel';
		$data = array_merge($this->currentUser(), $data);
		return view('backend.content.artikel.artikelAdd',compact('data'));
	}

}
