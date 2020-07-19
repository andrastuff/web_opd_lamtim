<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\Admin as Controller;

class Users extends Controller
{
    //
	public function index(){
		
		$data['title']   = 'List Users';
		$data = array_merge($this->currentUser(), $data);
		return view('backend.content.users.usersList',compact('data'));
	}
	
	public function view(){
		
		$data['title']   = 'View Users';
		$data = array_merge($this->currentUser(), $data);
		return view('backend.content.users.usersAdd',compact('data'));
	}
	
	public function add(){
		$data['title']   = 'Add Users';
		$data = array_merge($this->currentUser(), $data);
		return view('backend.content.users.usersAdd',compact('data'));	
	}
	
	public function profile(){
		$data['title']   = 'User Profile';
		$data = array_merge($this->currentUser(), $data);
		return view('backend.content.users.usersView',compact('data'));	
	}

	public function update(){
		$data['title']   = 'Update Users';
		$data = array_merge($this->currentUser(), $data);
		return view('backend.content.users.usersAdd',compact('data'));
	}

}