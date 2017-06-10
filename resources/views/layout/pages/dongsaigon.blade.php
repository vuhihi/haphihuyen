@extends('template.pages.bds')

@section('title','Đông Sài Gòn')

@section('tag','')

@section('description')

@section('content')
@foreach($items[0] as $item)
	<div class="single_archive wow fadeInDown">
        <div class="archive_imgcontainer"><img src="{{ $item->image }}" alt=""> </div>
      	<div class="archive_caption">
            <h2><a href="dongsaigon/{{ $item->link }}">{{ $item->title }}</a></h2>
            
        </div>
            <a class="read_more" href="dongsaigon/{{ $item->link }}"><span>Read More</span></a> 
   	</div>
@endforeach
@endsection

@section('content_left')
@if(count($items)>1)
@foreach($items[1] as $item)
	<li>
        <div class="media wow fadeInDown"> <a href="dongsaigon/{{ $item->link }}" class="media-left"> <img alt="" src="{{ $item->image }}"> </a>
        	<div class="media-body">
            	<h4 class="media-heading"><a href="dongsaigon/{{ $item->link }}">{{ $item->title }}</a></h4>
                
        	</div>
        </div>
    </li>
@endforeach
@endif

@endsection

@section('link_page')

@endsection