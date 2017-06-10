<!DOCTYPE html>
<html>
<head>
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
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Sahitya" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
<!--[if lt IE 9]>
<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
</head>
<body>
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
              <li><a href="pages/page.html">Về Chúng Tôi</a></li>
              <li><a href="">LIÊN HỆ</a></li>
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
          <div class="header_bottom_left"><a class="logo" href="index.html"><strong>HÀ PHI HUYỀN</strong> <span>Gủi Trọn Niềm Tin-Yêu Thương Kết Nối</span></a></div>
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
                <li><a href="{{ Route('vemaybay') }}">Vé Giá Rẻ</a></li>
                <li><a href="{{ Route('tintuc') }}">Tin Tức</a></li>
              </ul>
            </li>
            
            
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <section id="ContactContent">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="contact_area">
            <h1>Contacts</h1>
            <p>Vestibulum id nisl a neque malesuada hendrerit. Mauris ut porttitor nunc, ut volutpat nisl. Nam ullamcorper ultricies metus vel ornare. Vivamus tincidunt erat in mi accumsan, a sollicitudin risus vestibulum. Nam dignissim purus vitae nisl adipiscing ultricies. Pellentesque in porttitor tellus. Integer fermentum in sem eu tempus. In eu metus vitae nibh laoreet sollicitudin et ac lectus. Curabitur blandit velit elementum augue elementum scelerisque.</p>
            <div class="contact_bottom">
              <div class="contact_us wow fadeInRightBig">
                <h2>Contact Us</h2>
                <form action="#" class="contact_form">
                  <input class="form-control" type="text" placeholder="Tên">
                  <input class="form-control" type="text" placeholder="Số Điện Thoại Liên Lạc">
                  <input class="form-control" type="email" placeholder="E-mail">
                  <input class="form-control" type="text" placeholder="Tiêu Đề">
                  <textarea class="form-control" cols="30" rows="10" placeholder="Nội dung "></textarea>
                  <input type="submit" value="Gửi">
                </form>
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
<script src="{{asset('template/assets/js/jquery.min.js')}}"></script> 
<script src="{{asset('template/assets/js/bootstrap.min.js')}}"></script> 
<script src="{{asset('template/assets/js/wow.min.js')}}"></script> 
<script src="{{asset('template/assets/js/slick.min.js')}}"></script> 
<script src="{{asset('template/assets/js/custom.js')}}"></script>
</body>
</html>