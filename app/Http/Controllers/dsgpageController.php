<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dongsaigon;
use Crypt;
use App\Http\Requests;
use App\Helpers\MyFuncs;
use App\Http\Controllers\Controller;

class dsgpageController extends Controller
{
    public function index(){
        $item=dongsaigon::orderBy('id', 'desc')->paginate(14);
        $items=MyFuncs::getIndex($item);
        return response()->view('layout.pages.dongsaigon',compact('items'));

    }
    public function linhLeftPage($link){
        $item=dongsaigon::where('link',$link)->first();
        $id=$item->id;
        $link_page=dongsaigon::where('id','<',$id)->take(6)->orderBy('id','desc')->get();
        return view('layout.pages.dsg_page',['link_page'=>$link_page,'item'=>$item]);
    }
}
