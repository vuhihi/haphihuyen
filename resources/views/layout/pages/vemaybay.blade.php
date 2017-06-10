@extends('template.pages.bds')
@section('content')
@foreach($items[0] as $item)
	<div class="single_archive wow fadeInDown">
        <div class="archive_imgcontainer"><img src="{{ $item->image }}" alt=""> </div>
      	<div class="archive_caption">
            <h2><a href="vemaybay/{{ $item->link }}">{{ $item->title }}</a></h2>
            
        </div>
            <a class="read_more" href="vemaybay/{{ $item->link }}"><span>Read More</span></a> 
   	</div>
@endforeach
@endsection

@section('content_left')
@if(count($items)>1)
@foreach($items[1] as $item)
	<li>
        <div class="media wow fadeInDown"> <a href="vemaybay/{{ $item->link }}" class="media-left"> <img alt="" src="{{ $item->image }}"> </a>
        	<div class="media-body">
            	<h4 class="media-heading"><a href="vemaybay/{{ $item->link }}">{{ $item->title }}</a></h4>
                
        	</div>
        </div>
    </li>
@endforeach
@endif

@endsection

@section('link_page')

@endsection