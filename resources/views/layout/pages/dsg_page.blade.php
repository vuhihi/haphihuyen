@extends('template.pages.page')

@section('title')
{{ $item->title }}
@endsection

@section('tag')
{{ $item->tag }}
@endsection

@section('link_top_url')
{{ Route('dongsaigon') }}
@endsection
@section('link_top','Đông Sài Gòn')
@section('location')

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Bấm nút Hiển Thị Bản Đồ để xem bản đồ</h4>
      </div>
      @if($item->location=='')
      <div class="alert alert-info">
     	<strong>Bản Đồ </strong>chưa cập nhật. Chúng tôi sẽ sớm cập nhật!
      </div>
      @else
      <div class="modal-body" style="height:400px" id="map">
      @endif
      </div>
      <div class="modal-footer">
        @if(!$item->location=='')
        <button class="btn btn-danger" onclick="myMap()">Hiển Thị Bản Đồ</button>
        @endif
      </div>
    </div>

  </div>
</div>
<!--emd model-->


<script>
function myMap() {
  var mapCanvas = document.getElementById("map");
  var myCenter = new google.maps.LatLng({{ $item->location }}); 
  var mapOptions = {center: myCenter, zoom: 13};
  var map = new google.maps.Map(mapCanvas,mapOptions);
  var marker = new google.maps.Marker({
    position: myCenter,
    animation: google.maps.Animation.BOUNCE
  });
  marker.setMap(map);
}
</script>

@endsection

@section('description')
{{ $item->description }}
@endsection

@section('page_content')

<div>{!! $item->content !!}</div>
<button type="button" style="float:right" class="btn btn-info btn-sm" onclick="showMap()" id="show_map" data-toggle="modal" data-target="#myModal">Xem Bản Đồ</button>
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