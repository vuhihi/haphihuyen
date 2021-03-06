<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dongbinhduong;
use Crypt;
use App\Http\Requests;
use App\Helpers\MyFuncs;
use App\Http\Controllers\Controller;

class dbdpageController extends Controller
{
    public function index(){
    	$item=dongbinhduong::orderBy('id', 'desc')->paginate(14);
    	$items=MyFuncs::getIndex($item);
    	return response()->view('layout.pages.dongbinhduong',compact('items'));

    }
    public function linhLeftPage($link){
    	$item=dongbinhduong::where('link',$link)->first();
    	$id=$item->id;
    	$link_page=dongbinhduong::where('id','<',$id)->take(6)->orderBy('id','desc')->get();
    	return view('layout.pages.dbd_page',['link_page'=>$link_page,'item'=>$item]);
    }
}
