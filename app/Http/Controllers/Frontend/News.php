<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class News extends Controller
{
    //
	public function index(){
		
		$data['title']   = 'Berita';
		$data = array_merge($this->meta(), $data) ;
		if($data['template'] != ''){
			return view('frontend.'.$data['template'].'.content.news',compact('data'));
		}else{
			return view('frontend.classic.content.news',compact('data'));	
		}
	}
	
	public function read($id, $slug){
		
		$subtitle = ucwords(str_replace("-"," ",$slug));
		$data['title']   	= 'Detail Berita';
		$data['subtitle']   = Str::limit(strip_tags($subtitle), 50, "..");
		$data['metapage']  = self::read_get($id, $slug);
		$data = array_merge($this->meta(), $data) ;
		if($data['template'] != ''){
			return view('frontend.'.$data['template'].'.content.read',compact('data'));
		}else{
			return view('frontend.classic.content.read',compact('data'));	
		}
	}
	
	public function kategori($id){
		
		$title = ucwords(str_replace("-"," ",$id));
		$data['title']   = 'Kategori Berita '.$title;
		$data = array_merge($this->meta(), $data) ;
		if($data['template'] != ''){
			return view('frontend.'.$data['template'].'.content.news',compact('data'));
		}else{
			return view('frontend.classic.content.news',compact('data'));	
		}
	}
	
	public function tag($id){
		
		$title = ucwords(str_replace("-"," ",$id));
		$data['title']   = 'Tag Berita '.$title;
		$data = array_merge($this->meta(), $data) ;
		if($data['template'] != ''){
			return view('frontend.'.$data['template'].'.content.news',compact('data'));
		}else{
			return view('frontend.classic.content.news',compact('data'));	
		}
	}
	
	public function read_get($id, $slug){
		$user = "guzzle";
		$client = new \GuzzleHttp\Client();
		$response = $client->request('GET', env('APP_SERVER').'/'.'news/'.env('APP_INSTANSI').'/view/'.$id.'/'.$slug.'?useragent='.$user);
		$response = $response->getBody()->getContents();
		$response = json_decode($response);
		
		if($response->success == true){
			$data 		= array();
			if(!empty($response->data)){
			$response->data;
			foreach($response->data as $key=>$val){
				if($key != 'id');
				$data[$key] = $val;
			}
			}else{
			$data = [];   
			}

		}
		return $data;
	}

}
