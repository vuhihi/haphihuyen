<!DOCTYPE html>
<html>
<head>
<title>@yield('title')</title>
<meta charset="utf-8">
<meta name="keywords" content="@yield('tag')">
<meta name="description" content="@yield('description')">
<meta name="author" content="Công Ty TNHH Hà Phi Huyền">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{ asset('template/assets/css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('template/assets/css/font-awesome.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('template/assets/css/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('template/assets/css/slick.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('template/assets/css/theme.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('template/assets/css/style.css')}}">
<script src="{{ asset('template/assets/js/jquery.min.js')}}"></script> 
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<!--[if lt IE 9]>
<script src="../assets/js/html5shiv.min.js"></script>
<script src="../assets/js/respond.min.js"></script>
<![endif]-->
</head>
<body>
<!---facebook share plugin-->


<!--ket thuc facebook share plugin-->
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
              <li><a href="{{ Route('home') }}">Home</a></li>
              <li><a href="page.html">Về Chúng Tôi</a></li>
              <li><a href="{{ Route('contact') }}">Liên Hệ</a></li>
              <li><i class="material-icons" style="font-size:24px; color:green;">call</i> 0962999128</li>
              
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
          <div class="header_bottom_left"><a class="logo" href="{{ Route('home') }}"><strong>HÀ PHI HUYỀN</strong> <span>CÔNG TY TNHH-TM-DV HÀ PHI HUYỀN</span></a></div>
          <div class="header_bottom_right"></div>
        </div>
      </div>
    </div>
  </header>
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
                <li><a href="http://www.phongvephihuyen.com" target="_blank">Đặt Vé Máy Bay</a></li>
                <li><a href="{{ Route('vemaybay') }}">Vé Giá Rẻ</a></li>
                <li><a href="{{ Route('tintuc') }}">Tin Tức</a></li>
                
              </ul>
            </li>
            <li><a href="{{ Route('contact') }}">Liên Hệ</a></li>
            
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <section id="mainContent">
    <div class="content_bottom">
      <div class="col-lg-8 col-md-8">
        <div class="content_bottom_left">
          <div class="single_page_area">
            <ol class="breadcrumb">
              <li><a href="{{ Route('home') }}">Trang Chủ</a></li>
              <li><a href="@yield('link_top_url')">@yield('link_top')</a></li>
              
            </ol>
            
            <div class="single_page_content">
             @yield('page_content')
             
          <!--google map-->
         

<!--end map-->

            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="content_bottom_right">
          <div class="single_bottom_rightbar">
            <h2>Bất Động Sản Đang Bán</h2>
            <ul class="small_catg popular_catg wow fadeInDown">
            @yield('left_link')
            <!--
              <li>
                <div class="media wow fadeInDown"> <a href="#" class="media-left"> <img alt="" src="../images/112x112.jpg"> </a>
                  <div class="media-body">
                    <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                    <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra </p>
                  </div>
                </div>
              </li>
              -->
            </ul>
          </div>
          
              
          </div>
        <!--  <div class="single_bottom_rightbar">
            <h2>Blog Archive</h2>
            <div class="blog_archive wow fadeInDown">
              <form action="#">
                <select>
                  <option value="">Blog Archive</option>
                  <option value="">October(20)</option>
                </select>
              </form>
            </div>
          </div>  -->
          <div class="single_bottom_rightbar wow fadeInDown">
            <div class="content_bottom_right">
          
          
          
          <div class="single_bottom_rightbar wow fadeInDown">
            <h2>Bạn Quan Tâm</h2>
            <ul>
              <li><a href="{{Route('dongbinhduong')}}">Bất động sản</a></li>
              <li><a href="http://www.phongvephihuyen.com" target="_blank">Vé máy bay giá rẻ</a></li>
              <li><a href="{{ Route('dongbinhduong') }}">Dự án Đông Bình Dương</a></li>
              <li><a href="{{ Route('dongsaigon') }}">Bất động sản đang bán</a></li>
              <li><a href="{{ Route('vemaybay') }}">Tin Khuyến mãi</a></li>
              <li><a href="{{ Route('tintuc') }}">Tin Tức</a></li>
              
            </ul>
          </div>
        </div>
          </div>
        </div>
      </div>
    </div>
  </section>

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
            <h2>Trang Liên Kết</h2>
            <ul class="labels_nav">
              <li><a href="{{Route('dongbinhduong')}}">Bất động sản</a></li>
              <li><a href="http://www.phongvephihuyen.com" target="_blank">Vé máy bay giá rẻ</a></li>
              <li><a href="{{ Route('dongbinhduong') }}">Dự án Đông Bình Dương</a></li>
              <li><a href="{{ Route('dongsaigon') }}">Bất động sản đang bán</a></li>
              <li><a href="{{ Route('vemaybay') }}">Tin Khuyến mãi</a></li>
              <li><a href="{{ Route('tintuc') }}">Tin Tức</a></li>
              
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="single_footer_top wow fadeInRight">
            <h2>VỀ CHÚNG TÔI</h2>
            <p></p>
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
            <p>Copyright &copy; 2016 <a href="index.html">Hà Phi Huyền</a></p>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="footer_bottom_right">
            <p>Developed BY Hà Phi Huyền</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

@yield('location')

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCg06Jm2Gs2ELwE_hLbPYTjZC60Jj4RrYU&callback=myMap"></script>



<script src="{{ asset('template/assets/js/bootstrap.min.js')}}"></script> 
<script src="{{ asset('template/assets/js/wow.min.js')}}"></script> 
<script src="{{ asset('template/assets/js/slick.min.js')}}"></script> 
<script src="{{ asset('template/assets/js/custom.js')}}"></script>

</body>
</html>