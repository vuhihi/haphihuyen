@section('title','Admin|Dongbinhduong')
@extends('template.admin.supadmin')
@section('edit_and_delete')
<div class="flash-message">
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
      @if(Session::has('alert-' . $msg))

      <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
      @endif
    @endforeach

  </div>
  <div id='delete-infor'>
  	
  </div>
  @if(count($errors) > 0)
  <div class="alert alert-danger alert-dismissable">
  <ol>
  <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
  @foreach($errors->all() as $error)
    <li><span style='color:red; font-weight: bold;'>{{ $error }}</spa></li>
  @endforeach
  </ol>
  </div>
  @endif
   <!-- end .flash-message -->

<div class="table-responsive">
 <table class="table table-bordered">
    <thead>
      <tr>
        <th class='col-sm-5'>Title</th>
        <th class='col-sm-5'>Link</th>
        
        <th class='col-sm-2'>Action</th>
      </tr>
    </thead>
    <tbody>
   
    @foreach($item as $it)
      <tr>
        <td>{!!$it->title!!}</td>
        <td>{!!$it->link!!}</td>
        
        <td><a href='{{Route('getEditDbd',['id'=>$it->id])}}' class='btn btn-warning'>Sửa</a>
			<span class='btn btn-danger delete' onclick="ajax_delete(this);"><i class='id-delete' style='display: none;' >{{$it->id }}</i>Xóa</span>
        </td>
      </tr>
      
      @endforeach
    </tbody>
 </table>
 {!! $item->render() !!}

 </div>
@endsection
@section('model')

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Đông Bình Dương POST</h4>
        </div>
        <div class="modal-body">

        
          <form action='{{ Route('postDbd') }}' method='post'>
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
              <label>Tựa Đề</label>
              <input type="text" class="form-control" name='title' required="">
          </div>
          <div class="form-group">
              <label for="pwd">mô tả</label>
              <input type="text" class="form-control" name="description" required="">
          </div>
          <div class="form-group">
              <label>Thẻ</label>
              <input type="text" class="form-control" name='tag' required="">
          </div>
          <div class="form-group">
              <label>nội dung</label>
              <textarea class='form-control' id='editor1' name='content' required=""></textarea>
          </div>
          <div class="form-group">
              <label>Ảnh</label>
              <input type="text" class="form-control" onclick="openKCFinder(this)" style="width:600px;cursor:pointer" name="image" readonly="" required="">
          </div>
          <div class="form-group">
              <label>Vị trí</label>
              <input type="text" class="form-control" name='location'>
          </div>
          <button type="submit" class="btn btn-default">Submit</button>

          <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1', {
    filebrowserBrowseUrl: '{{url('kcfinder/browse.php?opener=ckeditor&type=files')}}',
    filebrowserUploadUrl: '{{url('kcfinder/upload.php?opener=ckeditor&type=files')}}'
});
            </script>  
            <script>
function openKCFinder(field) {
    window.KCFinder = {
        callBack: function(url) {
            field.value = url;
            window.KCFinder = null;
        }
    };
    window.open('{{url('kcfinder/browse.php?type=files&dir=files/public')}}', 'kcfinder_textbox',
        'status=0, toolbar=0, location=0, menubar=0, directories=0, ' +
        'resizable=1, scrollbars=0, width=800, height=600'
    );
}


function openKCFinder(field) {
    window.KCFinder = {
        callBack: function(url) {
            field.value = url;
            window.KCFinder = null;
        }
    };
    window.open('{{url('kcfinder/browse.php?type=files&dir=files/public')}}', 'kcfinder_textbox',
        'status=0, toolbar=0, location=0, menubar=0, directories=0, ' +
        'resizable=1, scrollbars=0, width=800, height=600'
    );
}


</script>

          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

@endsection
