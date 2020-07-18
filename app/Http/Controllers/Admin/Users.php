<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Users extends Controller
{
    //
	public function index(){
		
		$data['title']   = 'List Users';
		return view('backend.content.users.usersList',compact('data'));
	}
	
	public function view(){
		
		$data['title']   = 'View Users';
		return view('backend.content.users.usersAdd',compact('data'));
	}
	
	public function add(){
		$data['title']   = 'Add Users';
		return view('backend.content.users.usersAdd',compact('data'));	
	}
	
	public function profile(){
		$data['title']   = 'User Profile';
		return view('backend.content.users.usersView',compact('data'));	
	}

	public function update(){
		$data['title']   = 'Update Users';
		return view('backend.content.users.usersAdd',compact('data'));
	}

}