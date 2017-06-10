<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\vemaybay;
use Crypt;
use App\Http\Requests;
use App\Helpers\MyFuncs;
use App\Http\Controllers\Controller;

class vmbpageController extends Controller
{
    public function index(){
    	$item=vemaybay::orderBy('id', 'desc')->paginate(14);
    	$items=MyFuncs::getIndex($item);
    	return response()->view('layout.pages.vemaybay',compact('items'));

    }
    public function linhLeftPage($link){
    	$item=vemaybay::where('link',$link)->first();
    	$id=$item->id;
    	$link_page=vemaybay::where('id','<',$id)->take(6)->orderBy('id','desc')->get();
    	return view('layout.pages.vmb_page',['link_page'=>$link_page,'item'=>$item]);
    }
}
