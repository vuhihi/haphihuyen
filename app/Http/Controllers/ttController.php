<?php

namespace App\Http\Controllers;

use App\tintuc;
use Illuminate\Http\Request;
use App\Http\Requests\submitDataRequest;
use App\Helpers\MyFuncs;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class ttController extends Controller
{
    public function showItem(){
    $tintuc=new tintuc;
    $item=$tintuc->select('id','title','link')->orderBy('id', 'desc')->paginate('7');
    return view('layout.admin.tt_admin',compact('item'));
   }
   public function getEdit($id){
    $editItem= tintuc::find($id);
    return view('layout.admin.tt_edit',compact('editItem'));
   }
   public function postEdit($id,submitDataRequest $request){
     $item=tintuc::find($id);
     $item->title=$request->title;
     $item->description=$request->description;
     $item->tag=$request->tag;
     $item->content=$request->content;
     $item->image=$request->image;

     $savestatus=$item->save();
     if($savestatus){
        $request->session()->flash('alert-success','Sửa bài viết Thành Công');
     }
     else{
        $request->session()->flash('alert-danger','Đã gặp lỗi,bài viết không Sửa Được');
     }
        return redirect()->route('tt_admin');
   }
   public function postItem(submitDataRequest $request){
    $id=0;
    $tintuc=new tintuc;
    if($tintuc->count() > 0){
    $id=$tintuc->find($tintuc->max('id'))->id;
    }
    
    $tintuc->title=$request->title;
    $link=MyFuncs::returnLink($request->title,$id);
    $tintuc->description=$request->description;
    $tintuc->tag=$request->tag;
    $tintuc->content=$request->content;
    $tintuc->link=$link;
    $tintuc->image=$request->image;
    
    $savestatus=$tintuc->save();
    if($savestatus){
        $request->session()->flash('alert-success','Post bài viết Thành Công');
        return redirect()->route('tt_admin');
    }
    else{
        $request->session()->flash('alert-danger','Đã gặp lỗi,bài viết không Post Được');
        return redirect()->route('tt_admin');
    }
    }

    public function delete($id){
        
        $status=tintuc::destroy($id);
        if($status==1){
            return "Xóa thành công !";
        }
        else{
            return "Đã xảy ra lỗi,Xóa Không Thành Công";
        }
    }
}
