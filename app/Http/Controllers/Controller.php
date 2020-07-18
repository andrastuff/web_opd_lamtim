<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Arr;
use View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
	
	 public function __construct() {
		 

     }
	 
	public function Server($uri){
		$instansi 	= env('APP_INSTANSI');
		$server 	= env('APP_SERVER');
		return $server.'/'.$uri.'/'.$instansi;
	}
	
	public function meta(){
		$client = new \GuzzleHttp\Client();
		$headers = [
			'Origin' => url('/'),        
			'Accept'        => 'application/json',
		];
		try {
				$response = $client->request('GET', self::Server('meta'), ['headers' => $headers]);
			} catch (\GuzzleHttp\Exception\ClientException $e) {
				abort(404, $e->getResponse()->getStatusCode());
				 
			}
		$response = $response->getBody()->getContents();
		$response = json_decode($response);
		
		if($response->success == true){
			$data 		= array();
			
			$instansi 	= $response->data->instansi;
			if(!is_null($instansi)){
			foreach($instansi as $key=>$val){
				if($key != 'id');
				$data[$key] = $val;
			}
			}else{
				return abort(404, 'instansi not found.');
			}
			
			$setting 	= $response->data->setting;
			if(!is_null($setting)){
			foreach($setting as $key=>$val){
				$data[$key] = $val;
			}
			}else{
				return abort(404, 'global settings isn`t set.');
			}
			
			$instansi_setting 	= $response->data->instansi_setting;
			if(!is_null($instansi_setting)){
			foreach($instansi_setting as $key=>$val){
				if($key != 'id');
				$data[$key] = $val;
			}
			}else{
				return abort(404, 'instansi settings isn`t set.');
			}
			
			$banner 	= $response->data->banner;
			if(!is_null($banner)){
			$position = [];
			foreach($banner as $key){
				 
				$position[$key->posisi] = array( 
										"keterangan" => $key->keterangan,
										"link" => $key->link,
										"img" => $key->img,
										);
			 
			}
			}
			$data['menu'] = self::Menu(0, $response->data->menu, "", $data['template']);
			$data['client'] = $response->data->client;
			$data['banner'] = $position;

		}
		return $data;
	}
	
	public function Menu($parent, $data, $hasil, $template){
		 
		 $hasone 	= self::Filter($parent, $data);
		 $link ="";
		 if ($template == 'modern'){
         foreach($hasone as $item){
			 if ($item->link == Null){$link = url('/informasi'.'/'.strtolower(str_slug($item->nama_menu, "-")));} 
			 elseif ($item->link == 'news'){ $link = url('/news');} 
			 elseif ($item->link == 'kategori'){ $link = url('/news/kategori'.'/'.strtolower(str_slug($item->nama_menu, "-")));} 
			 elseif ($item->link == 'gallery'){ $link = url('/gallery');}
			 elseif ($item->link == 'contact'){ $link = url('/contact');}
             elseif ($item->link == 'mod'){
    				$link = url('/mod/'.strtolower(str_slug($item->nama_menu)));
    				$target ='_self';
    			} else{$link = 'http://'.$item->link;};
                $hastwo	=	self::Filter($item->id, $data);

				if(count((array)$hastwo) > 0){
						$hasil .= '<li><a class="dropdown" href="javascript:void(0);">'.strtoupper($item->nama_menu).' <span class="subnav-toggler fa fa-caret-down"></span></a>';
						 
						$hasil .= '<ul class="dropdown-menu">';
                        $hasil  = $this->Menu($item->id,$data,$hasil,$template);
                        $hasil .= '</ul>';  
						}
				else { 					
						$hasil .= '<li><a href="'.$link.'">'.strtoupper($item->nama_menu).'</a></li>';		
					 }
                        $hasil .='</li>';              
                               
         }
		 }else if(($template == '') OR ($template == 'classic')){
			foreach($hasone as $item){
			 if ($item->link == Null){$link = url('/informasi'.'/'.strtolower(str_slug($item->nama_menu, "-")));} 
			 elseif ($item->link == 'news'){ $link = url('/news');} 
			 elseif ($item->link == 'kategori'){ $link = url('/news/kategori'.'/'.strtolower(str_slug($item->nama_menu, "-")));} 
			 elseif ($item->link == 'gallery'){ $link = url('/gallery');}
			 elseif ($item->link == 'contact'){ $link = url('/contact');}
             elseif ($item->link == 'mod'){
    				$link = url('/mod/'.strtolower(str_slug($item->nama_menu)));
    				$target ='_self';
    			} else{$link = 'http://'.$item->link;};
                $hastwo	=	self::Filter($item->id, $data);

				if(count((array)$hastwo) > 0){
						$hasil .= '<li><a class="" href="javascript:void(0);">'.strtoupper($item->nama_menu).' <span class="subnav-toggler fa fa-caret-down"></span></a>';
						$hasil .= '<span class="has-dropdown"></span>';
						$hasil .= '<ul class="dropdown-menu">';
                        $hasil  = $this->Menu($item->id,$data,$hasil,$template);
                        $hasil .= '</ul>';  
						}
				else { 					
						$hasil .= '<li><a href="'.$link.'">'.strtoupper($item->nama_menu).'</a></li>';		
					 }
                        $hasil .='</li>';              
                               
         } 
		 }
		 
         return $hasil;
	}
	
	public function Slider(){
		$client = new \GuzzleHttp\Client();
		$response = $client->request('GET', self::Server('meta/slider'));
		$response = $response->getBody()->getContents();
		$response = json_decode($response);
		
		if($response->success == true){
			$data 		= array();
			if(!empty($response->data->slider)){
			$slider 	= $response->data->slider;
			$data['slider'] = $slider;
			}else{
			$data['slider'] = [];   
			}

		}
		return $data;
	}
	
	public function Filter($parent, $data){ 
		if($data != null){
		$result = array();
		 foreach($data as $val){
			 if($val->id_parent == $parent ){
			 $result[] = $val;
			 }
		 }
		 return $result;
		}else{
		 return [];
		}
		
	}
	
	
}
