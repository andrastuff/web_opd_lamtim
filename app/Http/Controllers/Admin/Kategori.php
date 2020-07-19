<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\Admin as Controller;

class Kategori extends Controller
{
    //
	public function index(){
		
		$data['title']   = 'List Kategori';
		$data = array_merge($this->currentUser(), $data);
		return view('backend.content.kategori.kategoriList',compact('data'));
	}
	
	public function view(){
		
		$data['title']   = 'View Kategori';
		$data = array_merge($this->currentUser(), $data);
		return view('backend.content.kategori.kategoriAdd',compact('data'));
	}
	
	public function add(){
		$data['title']   = 'Add Kategori';
		$data = array_merge($this->currentUser(), $data);
		return view('backend.content.kategori.kategoriAdd',compact('data'));	
	}
	
	public function update(){
		$data['title']   = 'Update Kategori';
		$data = array_merge($this->currentUser(), $data);
		return view('backend.content.kategori.kategoriAdd',compact('data'));
		//akses resource/views/backend/kategori/kategoriAdd
	}
}
