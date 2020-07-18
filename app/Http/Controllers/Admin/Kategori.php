<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Kategori extends Controller
{
    //
	public function index(){
		
		$data['title']   = 'List Kategori';
		return view('backend.content.kategori.kategoriList',compact('data'));
	}
	
	public function view(){
		
		$data['title']   = 'View Kategori';
		return view('backend.content.kategori.kategoriAdd',compact('data'));
	}
	
	public function add(){
		$data['title']   = 'Add Kategori';
		return view('backend.content.kategori.kategoriAdd',compact('data'));	
	}
	
	public function update(){
		$data['title']   = 'Update Kategori';
		return view('backend.content.kategori.kategoriAdd',compact('data'));
		//akses resource/views/backend/kategori/kategoriAdd
	}
}
