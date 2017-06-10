<?php

namespace App\Http\Controllers;
use Mail;
use Redirect;
use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\Events\SendMail;
use App\Http\Controllers\Controller;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendMail(Request $request)
    {
        $email=$request->email;
        $user=User::where('email',$email)->first();
        if($user){
        $car = array('name' =>'toyota' ,'year'=>'2012' );
        Mail::send('layout.mail.mail',['car'=>$car],function($m)use($user){
            $m->from('vu61895@gmail.com','HÀ PHI HUYỀN');
            $m->to($user->email,$user->name)->subject('lấy lại pass');
        });
         $request->session()->flash('success','Email phục hồi tài khoản đã được gửi tới Email '.$email.' vui lòng kiểm tra Email');
            return Redirect::back();
        }else{
            $request->session()->flash('danger','Email không tồn tại trong hệ thống.Kiểm tra lại Email');
        return Redirect::back();
        }
    }
    
}
