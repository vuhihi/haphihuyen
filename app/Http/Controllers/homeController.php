<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dongbinhduong;
use App\dongsaigon;
use App\vemaybay;
use App\tintuc;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class homeController extends Controller
{
    public function index(){
    	$dongbinhduong=dongbinhduong::take(8)->orderBy('id','desc')->get();

    	$dongsaigon=dongsaigon::take(7)->orderBy('id','desc')->get();

    	$vemaybay=vemaybay::take(4)->orderBy('id','desc')->get();

    	$tintuc=tintuc::take(6)->orderBy('id','desc')->get();



    	return view('layout.index',['dbd'=>$dongbinhduong,'dsg'=>$dongsaigon,'vmb'=>$vemaybay,'tt'=>$tintuc]);

    }
}
