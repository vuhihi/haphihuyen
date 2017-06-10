<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tintuc;
use Crypt;
use App\Http\Requests;
use App\Helpers\MyFuncs;
use App\Http\Controllers\Controller;

class ttpageController extends Controller
{
    public function index(){
    	$item=tintuc::orderBy('id', 'desc')->paginate(14);
    	$items=MyFuncs::getIndex($item);
    	return response()->view('layout.pages.tintuc',compact('items'));

    }
    public function linhLeftPage($link){
    	$item=tintuc::where('link',$link)->first();
    	$id=$item->id;
    	$link_page=tintuc::where('id','<',$id)->take(6)->orderBy('id','desc')->get();
    	return view('layout.pages.tt_page',['link_page'=>$link_page,'item'=>$item]);
    }
}
