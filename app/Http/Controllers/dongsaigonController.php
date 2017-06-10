<?php

namespace App\Http\Controllers;

use App\dongsaigon;
use Illuminate\Http\Request;
use App\Http\Requests\submitDataRequest;
use App\Helpers\MyFuncs;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class dongsaigonController extends Controller
{
    
    public function showItem(){
    $dongsaigon=new dongsaigon;
    $item=$dongsaigon->select('id','title','link')->orderBy('id', 'desc')->paginate('7');
    return view('layout.admin.dsg_admin',compact('item'));
   }

   public function postItem(submitDataRequest $request){
    $id=0;
    $dongsaigon=new dongsaigon;
    if($dongsaigon->count() > 0){
    $id=$dongsaigon->find($dongsaigon->max('id'))->id;
    }
    
    $dongsaigon->title=$request->title;
    $link=MyFuncs::returnLink($request->title,$id);
    $dongsaigon->description=$request->description;
    $dongsaigon->tag=$request->tag;
    $dongsaigon->content=$request->content;
    $dongsaigon->link=$link;
    $dongsaigon->image=$request->image;
    $dongsaigon->location=$request->location;
    
    $savestatus=$dongsaigon->save();
    if($savestatus){
        $request->session()->flash('alert-success','Post bài viết Thành Công');
        return redirect()->route('dsg_admin');
    }
    else{
        $request->session()->flash('alert-danger','Đã gặp lỗi,bài viết không Post Được');
        return redirect()->route('dsg_admin');
    }
    }

    public function getEdit($id){
    $editItem= dongsaigon::find($id);
    return view('layout.admin.dsg_edit',compact('editItem'));

   }

    public function postEdit($id,submitDataRequest $request){
        $item=dongsaigon::find($id);
     $item->title=$request->title;
     $item->description=$request->description;
     $item->tag=$request->tag;
     $item->content=$request->content;
     $item->image=$request->image;
     $item->location=$request->location;

     $savestatus=$item->save();
     if($savestatus){
        $request->session()->flash('alert-success','Sửa bài viết Thành Công');
     }
     else{
        $request->session()->flash('alert-danger','Đã gặp lỗi,bài viết không Sửa Được');
     }
     
        return redirect()->route('dsg_admin');
   }
   public function delete($id){
        
        $status=dongsaigon::destroy($id);
        if($status==1){
            return "Xóa thành công !";
        }
        else{
            return "Đã xảy ra lỗi,Xóa Không Thành Công";
        }
    }
}
