<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">

<title>HÀ PHI HUYỀN</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{url('template/assets/css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('template/assets/css/font-awesome.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('template/assets/css/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('template/assets/css/slick.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('template/assets/css/theme.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('template/assets/css/style.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Sahitya" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <!--test-->
	
  <title>@yield('title')</title>
  <script src="{{url('ckeditor/ckeditor.js')}}"></script>
</head>



<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
  <header id="header">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="header_top">
          <div class="header_top_left">
            <ul class="top_nav">
              <li><a href="{{ Route('home') }}">TRANG CHỦ</a></li>
              <li><a href="">About</a></li>
              <li><a href="">LIÊN HỆ</a></li>
              @if(Auth::check())
    <li ><a href='{{ Route('logout') }}' >Logout</li>
    <li ><a href='{{ Route('admin') }}' >Quản Lý</li>
    <li><i class="fa fa-user" style="font-size:24px" style="color:#FFA500"></i> {{ Auth::user()->name }} </li>
    @else
    <li><a href='{{ Route('login') }}'>LogIn</a></li>
@endif
@if(Session::has('admin_level'))
    <li><span>{{ session('name') }}</span></li>
@endif
              @yield('log')
              
            </ul>
          </div>
          <div class="header_top_right">
            <form action="#" class="search_form">
              <input type="text" placeholder="Text to Search">
              <input type="submit" value="">
            </form>
          </div>
        </div>
        <div class="header_bottom">
          <div class="header_bottom_left"><a class="logo" href="index.html"><strong>HÀ PHI HUYỀN</strong> <span>CÔNG TY TNHH HÀ PHI HUYỀN</span></a></div>
          <div class="header_bottom_right"><a href="#"><img src="images/addbanner_728x90_V1.jpg" alt=""></a></div>
        </div>
      </div>
    </div>
  </header>
  <div class="row">
  <div id="navarea">
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav custom_nav">
            <li class=""><a href="{{ Route('home') }}">TRANG CHỦ</a></li>
            <li class="dropdown"> <a href="#" class="" data-toggle="dropdown" role="button" aria-expanded="false">BẤT ĐỘNG SẢN</a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="{{ Route('dongbinhduong') }}">Đông Bình Dương</a></li>
                <li><a href="{{ Route('dongsaigon') }}">Đông Sài Gòn</a></li>
                
              </ul>
            </li>
            <li class="dropdown"> <a href="#" class="" data-toggle="dropdown" role="button" aria-expanded="false">VÉ MÁY BAY</a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="{{ Route('vemaybay') }}">Vé Giá Rẻ</a></li>
                <li><a href="{{ Route('tintuc') }}">Tin Tức</a></li>
              </ul>
            </li>
            <li><a href="pages/contact.html">LIÊN HỆ</a></li>
            
          </ul>
        </div>
      </div>
    </nav>
  </div>

  </div>























	
      <div class="row" style="margin-top: 100px;">
      <div class="col-sm-3">
        <div class="list-group">
          <a  class="list-group-item active"><button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal">ĐĂNG BÀI</button></a>
          <a href="{{Route('dbd_admin')}}" class="list-group-item">Đông Bình Dương</a>
          <a href="{{Route('dsg_admin')}}" class="list-group-item">Đông Sài Gòn</a>
          
          <a href="{{ Route('vmb_admin') }}" class="list-group-item">Vé Máy Bay</a>
          
          <a href="{{ Route('tt_admin') }}" class="list-group-item">Tin Tức</a>
          <a href="" class="list-group-item">Thành Viên</a>
          <a href="{{ Route('home') }}" class="list-group-item">Home</a>
        </div>
    </div>
    
    <div>
    @yield('model')
    <!--
    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">

        
          <form>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" id="email" placeholder="Enter email">
          </div>
          <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" id="pwd" placeholder="Enter password">
          </div>
          <div class="checkbox">
              <label><input type="checkbox"> Remember me</label>
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  -->
  </div>
  <div class='col-sm-9'>
    @yield('edit_and_delete')
  </div>
  </div>
    
  




<footer id="footer">
  <div class="footer_top">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="single_footer_top wow fadeInLeft">
            <h2>Flicker Images</h2>
            <ul class="flicker_nav">
              <li><a href="#"><img src="images/75x75.jpg" alt=""></a></li>
              <li><a href="#"><img src="images/75x75.jpg" alt=""></a></li>
              <li><a href="#"><img src="images/75x75.jpg" alt=""></a></li>
              <li><a href="#"><img src="images/75x75.jpg" alt=""></a></li>
              <li><a href="#"><img src="images/75x75.jpg" alt=""></a></li>
              <li><a href="#"><img src="images/75x75.jpg" alt=""></a></li>
              <li><a href="#"><img src="images/75x75.jpg" alt=""></a></li>
              <li><a href="#"><img src="images/75x75.jpg" alt=""></a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="single_footer_top wow fadeInDown">
            <h2>Labels</h2>
            <ul class="labels_nav">
              <li><a href="{{Route('dongbinhduong')}}">Bất động sản</a></li>
              <li><a href="http://www.phongvephihuyen.com" target="_blank">Vé máy bay giá rẻ</a></li>
              <li><a href="{{ Route('dongbinhduong') }}">Dự án Đông Bình Dương</a></li>
              <li><a href="{{ Route('dongsaigon') }}">Bất động sản đang bán</a></li>
              <li><a href="{{ Route('vemaybay') }}">Tin Khuyến mãi</a></li>
              <li><a href="{{ Route('tintuc') }}">Tin Tức</a></li>
              <li><a href="http://www.phongvephihuyen.com" target="_blank">Đặt Vé Máy Bay</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="single_footer_top wow fadeInRight">
            <h2>About Us</h2>
            <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed nec laoreet orci, eget ullamcorper quam. Phasellus lorem neque, </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer_bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="footer_bottom_left">
            <p>Copyright &copy; 2045 <a href="index.html">magExpress</a></p>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="footer_bottom_right">
            <p>Developed BY Wpfreeware</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>





</div>
	
  <script src="{{asset('template/assets/js/jquery.min.js')}}"></script> 
<script src="{{asset('template/assets/js/bootstrap.min.js')}}"></script> 
<script src="{{asset('template/assets/js/wow.min.js')}}"></script> 
<script src="{{asset('template/assets/js/slick.min.js')}}"></script> 
<script src="{{asset('template/assets/js/custom.js')}}"></script>
			
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="{{ asset('template/myJs/js1.js') }}" ></script>


</html>