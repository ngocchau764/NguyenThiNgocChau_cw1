<!DOCTYPE html>
<html lang="en">
   
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>@yield('title')</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
 
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
      <!-- font awesome -->
      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--  -->
      <!-- owl stylesheets -->
      <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext" rel="stylesheet">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesoeet" href="css/owl.theme.default.min.css">
      
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      @yield('header')
   </head>
   <body>
      <!-- banner bg main start -->
      @yield('content')
      <!-- copyright section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
        <div class="container">
           <div class="footer_logo"><a href="index.html"><img src="images/logo1.png"></a></div>
           <div class="input_bt">
              <input type="text" class="mail_bt" placeholder="Your Email" name="Your Email">
              <span class="subscribe_bt" id="basic-addon2"><a href="#">Subscribe</a></span>
           </div>
           <div class="footer_menu">
              <ul>
                 <li><a href="index.html">Trang Chủ</a></li>
                 <li><a href="product.html">Sản Phẩm</a></li>
                 <li><a href="product_detail.html"> Chi Tiết Sản Phẩm </a></li>
                 <li><a href="contact.html">Liên hệ</a></li>
                 <li><a href="#">Đăng Kí Tài Khoản</a></li>
              </ul>
           </div>
           <div class="location_main">Liên hệ với chúng tôi: <a href="#">0907123091</a></div>
        </div>
     </div>
     <!-- footer section end -->
     <!-- copyright section start -->
     <div class="copyright_section">
        <div class="container">
           <p class="copyright_text">© 2024 All Rights Reserved. Design by NGUYENNGOCCHAU <a href="https://html.design"></a></p>
        </div>
     </div>
     <!-- copyright section end -->

      <!-- Javascript files-->
      @yield('footer')
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script>
         function openNav() {
           document.getElementById("mySidenav").style.width = "250px";
         }
         
         function closeNav() {
           document.getElementById("mySidenav").style.width = "0";
         }
      </script>
   </body>
</html>