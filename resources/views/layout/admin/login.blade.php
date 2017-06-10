@extends('template.admin.login')
@section('error')
@if (count($errors) > 0)
       

        <div class="alert alert-info alert-dismissable fade in" style='width: 100%;margin: auto;max-width: 525px;
    position: relative;'>
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    	<ol>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ol>
  </div>
    @endif
@endsection