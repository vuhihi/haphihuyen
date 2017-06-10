<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class submitDataRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'=>'required|max:250',
            'description'=>'required|max:250',
            'tag'=>'required|max:250',
            'content'=>'required',
            'image'=>'required',
        ];
    }

    /***chỉnh sửa message xuất ra view   **/

    public function messages(){
        return[
        'title.required'=>'Bạn phải nhập TIÊU ĐỀ cho bài viết',
        'description.required'=>'Bạn phải nhập MÔ TẢ cho bài viết',
        'tag.required'=>'Bạn phải nhập TAG cho bài viết',
        'content.required'=>'Bạn phải nhập NÔI DUNG cho bài viết',
        'image.required'=>'Bạn phải nhập HÌNH ẢNH cho bài viết'
        
        ];
    }
}
