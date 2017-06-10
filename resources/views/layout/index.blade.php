@extends('template/index')
@section('log')
   
@if(Auth::check())
    <li ><a href='{{ Route('logout') }}' >Logout</li>
    <li ><a href='{{ Route('admin') }}' >Quản Lý</li>
    <li><i class="material-icons" style="font-size:24px">person</i> {{ Auth::user()->name }} </li>
    @else
    <li><a href='{{ Route('login') }}'>LogIn</a></li>
@endif
@if(Session::has('admin_level'))
    <li><span>{{ session('name') }}</span></li>
@endif
@endsection
@section('dong_binh_duong1')
@for($i=0 ; $i<4; $i++)
@if(isset($dbd[$i]))
<div class="single_iteam" style="height:428px;"><img src="{{ $dbd[$i]->image }}" alt="" style="height:100%; width:100%;">
    <h2><a class="slider_tittle" href="dongbinhduong/{{$dbd[$i]->link}}">{{ $dbd[$i]->title }}</a></h2>
</div>
@endif
@endfor
@endsection

@section('dong_binh_duong2')
<ul class="featured_nav wow fadeInDown">
@for($i=4; $i<8; $i++)
@if(isset($dbd[$i]))
    <li><img src="{{ $dbd[$i]->image }}" alt="">
        <div class="title_caption"><a href="{{ $dbd[$i]->link }}">{{ $dbd[$i]->title }}</a></div>
    </li>
@endif
@endfor   
</ul>
@endsection

@section('dong_saigon')
<ul class="catg1_nav">
@for($i=0; $i<2; $i++)
@if(isset($dsg[$i]))
              <li>
                <div class="single_archive wow fadeInDown">
                  <div class="archive_imgcontainer"><img src="{{ $dsg[$i]->image }}" alt=""> </div>
                  <div class="archive_caption">
                  <h2><a href="dongsaigon/{{ $dsg[$i]->link }}" style="font-size:16px;">{{ $dsg[$i]->title }}</a></h2></div>
                  <a class="read_more" href="dongsaigon/{{ $dsg[$i]->link }}"><span>Read More</span></a> 
                </div>
              </li>
@endif              
@endfor              
            </ul>
@endsection

@section('dong_saigon1')
@for($i=2; $i<5; $i++)
@if(isset($dsg[$i]))
            <div class="single_featured_slide"> <a href="dongsaigon/{{ $dsg[$i]->link }}"><img src="{{ $dsg[$i]->image }}" alt=""></a>
              <h2><a href="dongsaigon/{{ $dsg[$i]->link }}">{{ $dsg[$i]->title }}</a></h2>
              
            </div>
@endif
@endfor            
@endsection

@section('dong_saigon2')
<ul class="catg1_nav">
@for($i=5; $i<7; $i++)
@if(isset($dsg[$i]))
              <li>
                <div class="single_archive wow fadeInDown">
                  <div class="archive_imgcontainer"><img src="{{ $dsg[$i]->image }}" alt=""> </div>
                  <div class="archive_caption">
                  <h2><a href="dongsaigon/{{ $dsg[$i]->link }}" style="font-size:16px;">{{ $dsg[$i]->title }}</a></h2></div>
                  <a class="read_more" href="dongsaigon/{{ $dsg[$i]->link }}"><span>Read More</span></a> 
                </div>
              </li>
@endif              
@endfor  
            </ul>
@endsection


@section('ve')
<div class="business_category_left wow fadeInDown">
              <ul class="fashion_catgnav">
              
              @if(isset($vmb[0]))
                <li>
                  <div class="catgimg2_container"> <a href="vemaybay/{{ $vmb[0]->link }}"><img alt="" src="{{ $vmb[0]->image }}"></a> </div>
                  <h2 class="catg_titile"><a href="vemaybay/{{ $vmb[0]->link }}">{{ $vmb[0]->title }}</a></h2>
                <!--  <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> <span class="meta_more"><a  href="#">Read More...</a></span> </div>    -->
                  
                </li>
              @endif
              
              </ul>
            </div>
            <div class="business_category_right wow fadeInDown">
              <ul class="small_catg">
              @for($i=1; $i<4; $i++)
              @if(isset($vmb[$i]))
                <li>
                  <div class="media wow fadeInDown"> <a class="media-left" href="vemaybay/{{ $vmb[$i]->link }}"><img src="{{ $vmb[$i]->image }}" alt=""></a>
                    <div class="media-body">
                      <h4 class="media-heading"><a href="vemaybay/{{ $vmb[$i]->link }}">{{ $vmb[$i]->title }}</a></h4>
                      <!--   <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span>
                      class="meta_comment"><a href="#">No Comments</a></span> </div>   -->
                    </div>
                  </div>
                </li>
              @endif
              @endfor  
              </ul>
            </div>
@endsection

@section('tintuc1')
<ul class="fashion_catgnav wow fadeInDown" style="display:table">
            @if(isset($tt[0]))
                  <li>
                    <div class="single_archive wow fadeInDown">
                  <div class="archive_imgcontainer"><img src="{{ $tt[0]->image }}" alt=""> </div>
                  <div class="archive_caption">
                  <h2><a href="{{ $tt[0]->link }}">{{ $tt[0]->title }}</a></h2></div>
                  <a class="read_more" href="#"><span>Read More</span></a> 
                </div>
                  </li>
            @endif
                </ul>

               
                <ul class="small_catg wow fadeInDown">
            @for($i=1; $i<4; $i++)
            @if(isset($tt[$i]))
                  <li>
                    <div class="media"> <a class="media-left" href="tintuc/{{ $tt[$i]->link }}"><img src="{{ $tt[$i]->image }}" alt=""></a>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="tintuc/{{ $tt[$i]->link }}">{{ $tt[$i]->title }}</a></h4>
                        
                    </div>
                  </li>
            @endif
            @endfor
                  
                </ul>
@endsection

@section('tintuc2')
              <ul class="fashion_catgnav wow fadeInDown" style="display:table">
            @if(isset($tt[4]))
                  <li>
                    <div class="single_archive wow fadeInDown">
                  <div class="archive_imgcontainer"><img src="{{ $tt[4]->image }}" alt=""> </div>
                  <div class="archive_caption">
                  <h2><a href="{{ $tt[4]->link }}">{{ $tt[4]->title }}</a></h2></div>
                  <a class="read_more" href="{{ $tt[4]->link }}"><span>Read More</span></a> 
                </div>
                  </li>
            @endif
                </ul>

               
                <ul class="small_catg wow fadeInDown">
            @for($i=5; $i<8; $i++)
            @if(isset($tt[$i]))
                  <li>
                    <div class="media"> <a class="media-left" href="tintuc/{{ $tt[$i]->link }}"><img src="{{ $tt[$i]->image }}" alt=""></a>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="tintuc/{{ $tt[$i]->link }}">{{ $tt[$i]->title }}</a></h4>
                                                
                    </div>
                  </li>
            @endif
            @endfor
                  
                </ul>
@endsection


