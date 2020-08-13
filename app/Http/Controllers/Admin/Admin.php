<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;

class Admin extends Controller
{
   
    public function currentUser(){
        $access = '';
		$server = env('APP_SERVER');
        $client = new \GuzzleHttp\Client();
        $token = $_COOKIE['access_tokenku'];
        $headers = [
			'Origin' => url('/'),        
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '.$token,
        ];

        try {
            $response = $client->request('GET', $server.'/admin/user', ['headers' => $headers]); //request data dari url tersebut ke api/meta@index
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            abort(404, $e->getResponse()->getStatusCode());
        }

        $response = $response->getBody()->getContents(); //mengambil value dari $response yang berupa JSON
        $response = json_decode($response); //merubah $response menjadi array
        $access = $response->hak_akses;
        if(($access == 'super admin') OR ($access == 'admin view')){
            $user = $response;
            $data = array(); //set variabel data untuk menampung hasil response

			foreach($user as $key=>$val){ //setiap data $instansi dijadikan menjadi $key
				if($key != 'id'); //jika key bukan bernilai string 'id' maka
				$data[$key] = $val; //atur variabel $key untuk menjadi array key pada variabel $data
            }
            
			}else{ //jika user pada response->data = null maka akan tampil pesan error 404
                setcookie("access_tokenku", null);
                return abort(404, 'user not found.');
            }
            $data['user'] = $data;
            return $data;
        
        
    }
	
	
}
