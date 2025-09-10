<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Education Meeting HTML5 Template</title>

    <!-- Bootstrap core CSS -->
    <link href="clients/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="clients/assets/css/fontawesome.css">
    <link rel="stylesheet" href="clients/assets/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="clients/assets/css/owl.css">
    <link rel="stylesheet" href="clients/assets/css/lightbox.css">
<!--

TemplateMo 569 Edu Meeting

https://templatemo.com/tm-569-edu-meeting

-->

<style>
  .btna{
    text-decoration: none !important;
    color: black;
  }
  .navbtn{
    background-color: #ffffffff;
    border: 1px solid #000000ff;
    color: black;
    padding: 8px 16px;
    text-align: center;
    text-decoration: none !important;
    display: inline-block;
    font-size: 14px;
    margin: 1px 2px;
    cursor: pointer;
    border-radius: 4px;
  }

  .navbtn:hover {
    background-color: #ec971f;
    color: white !important;
  }

.lbtn{
 background-color: #ffffffff;
    border: 1px solid #000000ff;
    color: black;
    padding: 8px 16px;
    text-align: center;
    text-decoration: none !important;
    display: inline-block;
    font-size: 14px;
    margin: 1px 2px;
    cursor: pointer;
    border-radius: 4px;
}
.lbtn:hover {
    background-color: #ff0000ff;
    color: white !important;
  }
</style>

  </head>

  

<body>
  <!-- Sub Header -->
  <div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-8">
          <div class="left-content">
            <p>This is an educational <em>HTML CSS</em> template by TemplateMo website.</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-4">
          <div class="right-icons">
            <ul>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-behance"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  


  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                     <a href="/" class="logo">
  <img src="clients/assets/images/logo5.png" alt="Edu Meeting Logo" style="width:80px; height:auto;">
</a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">

                          <li class="scroll-to-section"><a href="/" class="active">Home</a></li>
                          <li><a href="/meetingss">Meetings</a></li>
                          <li class="scroll-to-section"><a href="/#apply">Apply Now</a></li>
                          <li class="has-sub">
                              <a href="javascript:void(0)">Pages</a>
                              <ul class="sub-menu">
                                  <li><a href="meetings.html">Upcoming Meetings</a></li>
                                  <li><a href="/mdetails">Meeting Details</a></li>
                              </ul>
                          </li>
                          <li class="scroll-to-section"><a href="#courses">Courses</a></li> 
                          <li class="scroll-to-section"><a href="#contact">Contact Us</a></li>
                          @if (Auth::check())
                   <form action="/logout" method="POST" >@csrf<button class="lbtn lbtn">Logout</button></form>
                @else
                 <a href="/login" class="navbtn btna">Sign in</a>

                          <a href="/register" class="navbtn btna">Sign up</a>
                          @endif
                         
                           
                      </ul>        
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>
   
  <!-- ***** Header Area End ***** -->
       
    @yield('content')

    <!-- footer start -->

   
       <div class="footer ">
      <p>Copyright © 2022 Edu Meeting Co., Ltd. All Rights Reserved. 
          <br>
          Design: <a href="https://templatemo.com" target="_parent" title="free css templates">TemplateMo</a>
          <br>
          Distibuted By: <a href="https://themewagon.com" target="_blank" title="Build Better UI, Faster">ThemeWagon</a>
        </p>
    </div>
 
  

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="clients/vendor/jquery/jquery.min.js"></script>
    <script src="clients/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="clients/assets/js/isotope.min.js"></script>
    <script src="clients/assets/js/owl-carousel.js"></script>
    <script src="clients/assets/js/lightbox.js"></script>
    <script src="clients/assets/js/tabs.js"></script>
    <script src="clients/assets/js/video.js"></script>
    <script src="clients/assets/js/slick-slider.js"></script>
    <script src="clients/assets/js/custom.js"></script>
   
</body>

</body>
</html>