<?php

namespace App\Http\Controllers;

use App\vemaybay;
use Illuminate\Http\Request;
use App\Http\Requests\submitDataRequest;
use App\Helpers\MyFuncs;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class vmbController extends Controller
{
    public function showItem(){
    $vemaybay=new vemaybay;
    $item=$vemaybay->select('id','title','link')->orderBy('id', 'desc')->paginate('7');
    return view('layout.admin.vmb_admin',compact('item'));
   }
   public function getEdit($id){
    $editItem= vemaybay::find($id);
    return view('layout.admin.vmb_edit',compact('editItem'));
   }
   public function postEdit($id,submitDataRequest $request){
     $item=vemaybay::find($id);
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
        return redirect()->route('vmb_admin');
   }

   public function postItem(submitDataRequest $request){
    $id=0;
    $vemaybay=new vemaybay;
    if($vemaybay->count() > 0){
    $id=$vemaybay->find($vemaybay->max('id'))->id;
    }
    
    $vemaybay->title=$request->title;
    $link=MyFuncs::returnLink($request->title,$id);
    $vemaybay->description=$request->description;
    $vemaybay->tag=$request->tag;
    $vemaybay->content=$request->content;
    $vemaybay->link=$link;
    $vemaybay->image=$request->image;
    
    
    $savestatus=$vemaybay->save();
    if($savestatus){
        $request->session()->flash('alert-success','Post bài viết Thành Công');
        return redirect()->route('vmb_admin');
    }
    else{
        $request->session()->flash('alert-danger','Đã gặp lỗi,bài viết không Post Được');
        return redirect()->route('vmb_admin');
    }
    }

    public function delete($id){
        
        $status=vemaybay::destroy($id);
        if($status==1){
            return "Xóa thành công !";
        }
        else{
            return "Đã xảy ra lỗi,Xóa Không Thành Công";
        }
    }

}
