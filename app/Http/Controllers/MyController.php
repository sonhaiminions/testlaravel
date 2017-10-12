<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MyController extends Controller
{
    public function XinChao()
    {
    	echo 'xin chao';
    }
    public function KhoaHoc($ten='')
    {
    	echo "khoa hoc la :".$ten;
    }
   public function layURL(Request $Request)
   {
   		if($Request->isMethod('post'))
   		{
   			echo "la phuog thuc post";
   		}else
   		{
   			echo "khong phai post";
   		}
   		if ($Request->is('ur -ll')) {
		    echo 'Đường dẫn bạn vừa truy nhập đúng là http://laravel.dev/' . $Request->path();
			}
   }

   public function getForm()
   {
   		return view('postForm');
   }
   public function HienThi(Request $Request)
   {
   	echo $Request->HoTen."<br>";
   	// if($Request->has('user'))
   	// 	echo "co user";
   	// echo $data->HoTen;
   	// echo $Request->input('id');
   	print_r($Request->except('id'));
   }
   public function setCooKie()
    {
      $response = new Response();
      $response->withcookie('khoahoc3','sonhai12345',0.1);
      echo "da set cookie";
      return $response;
    }
    public function getCooKie(Request $Request)
    { echo "cookie cua ban  la :";
      return $Request->cookie('khoahoc3');
    }
}
