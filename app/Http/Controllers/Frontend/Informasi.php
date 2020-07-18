<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
class Informasi extends Controller
{
    //
	public function index(){

	}
	
	public function page($id){
		$title = ucwords(str_replace("-"," ",$id));
		
		$data['title']   = $title;
		$data = array_merge($this->meta(), $data) ;
		
		if($id == 'publikasi'){return self::publikasi($id);}else{
			if($data['template'] != ''){
				return view('frontend.'.$data['template'].'.content.page',compact('data'));
			}else{
				return view('frontend.modern.content.page',compact('data'));	
			}
		}
	}
	
	public function publikasi($id){
		$title = ucwords(str_replace("-"," ",$id));
		$data['title']   = 'Download '.$title;
		$data = array_merge($this->meta(), $data) ;
		if($data['template'] != ''){
			return view('frontend.'.$data['template'].'.content.publikasi',compact('data'));
		}else{
			return view('frontend.modern.content.publikasi',compact('data'));	
		}
	}
	
	public function ViewPublikasi($id){
		$title = ucwords(str_replace("-"," ",$id));
		$data['title']   = 'Detail Publikasi '.$title;
		$data = array_merge($this->meta(), $data) ;
		if($data['template'] != ''){
			return view('frontend.'.$data['template'].'.content.view_publikasi',compact('data'));
		}else{
			return view('frontend.modern.content.view_publikasi',compact('data'));	
		}
	}

}
