<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class hompageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function setSession(Request $request){
        $request->session()->put('name','vu_nguyen ');
    }
    public function show(Request $request){
        if($request->session()->has('name')){
            return "có session";
        }else{
            return"không có session";
        }
      
    }
    public function delSession(Request $request){
        $request->session()->forget('name');
    }

    public function contact(){
        return view('layout.pages.contact');
    }
}
