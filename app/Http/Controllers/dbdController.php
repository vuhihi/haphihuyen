<?php

namespace App\Http\Controllers;
use App\dongbinhduong;
use Illuminate\Http\Request;
use App\Http\Requests\submitDataRequest;
use App\Helpers\MyFuncs;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class dbdController extends Controller
{
   public function showItem(){
    $dongbinhduong=new dongbinhduong;
    $item=$dongbinhduong->select('id','title','link')->orderBy('id', 'desc')->paginate('7');
    return view('layout.admin.dbd_admin',compact('item'));
   }
   public function getEdit($id){
    $editItem= dongbinhduong::find($id);
    return view('layout.admin.dbd_edit',compact('editItem'));
   }
   public function postEdit($id,submitDataRequest $request){
        $item=dongbinhduong::find($id);
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
     
        return redirect()->route('dbd_admin');
   }
   public function postItem(submitDataRequest $request){
    $id=0;
    $dongbinhduong=new dongbinhduong;
    if($dongbinhduong->count() > 0){
    $id=$dongbinhduong->find($dongbinhduong->max('id'))->id;
    }
    
    $dongbinhduong->title=$request->title;
    $link=MyFuncs::returnLink($request->title,$id);
    $dongbinhduong->description=$request->description;
    $dongbinhduong->tag=$request->tag;
    $dongbinhduong->content=$request->content;
    $dongbinhduong->link=$link;
    $dongbinhduong->image=$request->image;
    $dongbinhduong->location=$request->location;
    
    $savestatus=$dongbinhduong->save();
    if($savestatus){
        $request->session()->flash('alert-success','Post bài viết Thành Công');
        return redirect()->route('dbd_admin');
    }
    else{
        $request->session()->flash('alert-danger','Đã gặp lỗi,bài viết không Post Được');
        return redirect()->route('dbd_admin');
    }
    }

    public function delete($id){
        
        $status=dongbinhduong::destroy($id);
        if($status==1){
            return "Xóa thành công !";
        }
        else{
            return "Đã xảy ra lỗi,Xóa Không Thành Công";
        }
    }
}
