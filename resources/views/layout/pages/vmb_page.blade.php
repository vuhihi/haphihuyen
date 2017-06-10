@extends('template.pages.giaitri')
@section('link_top','Vé Máy Bay')
@section('link_top_url')
{{ Route("vemaybay") }}
@endsection
@section('page_content')

<div>{!! $item->content !!}</div>
@endsection
@section('left_link')
@if(count($link_page)>1)
@foreach($link_page as $link)
<li>
                <div class="media wow fadeInDown"> <a href="{{ $link->link }}" class="media-left"> <img alt="" src="{{ $link->image }}"> </a>
                  <div class="media-body">
                    <h4 class="media-heading"><a href="{{ $link->link }}">{{ $link->title }}</a></h4>
                   
                  </div>
                </div>
              </li>
@endforeach
@endif
@endsection