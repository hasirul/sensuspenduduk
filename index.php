<?php ob_start("ob_gzhandler"); ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html lang="en">
<head>

<meta name="description" content="">
<meta name="author" content="">
<title>DAILY REPORT</title>
<link href="assets/swal/dist/sweetalert.css" rel="stylesheet" type="text/css"/>
<script src="assets/swal/dist/sweetalert.min.js"></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<!-- Bootstrap Core CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<!-- Custom Fonts -->
<link href='https://fonts.googleapis.com/css?family=Mrs+Sheppards%7CDosis:300,400,700%7COpen+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800;' rel='stylesheet' type='text/css'>
<!-- Plugin CSS -->
<link rel="stylesheet" href="css/animate.min.css" type="text/css">
<!-- Custom CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css">


</head>
<style>
@import url('https://fonts.googleapis.com/css?family=Raleway');

@media only screen and (min-width: 961px) {
      .navbar-brand h4{
        text-align: center;
        margin-bottom: 0;
        color: green !important;
        font-weight: bold;
        font-size: 30px;
        line-height: 81px;

    }
    .navbar1{
        background:#fff;
    }
    section{
      padding: 0 !important;
    }
    img{
      margin-bottom:35px;
    }
    body{
        font-family:;
    }
    .page-scroll{
      cursor: pointer !important;
    }

    .logo h3{
      margin-left: 0px !important;
    }

    #owl-demo .item img{
        width:100% !important;
        height:503px !important;
    }
    .owl-theme .owl-controls .owl-buttons .owl-next, .owl-theme .owl-controls .owl-buttons .owl-prev{
      position:absolute;
      top:40%;
      opacity:1;
      color:#fff;
      font-weight:bold;
      font-size:63px;
      border-radius:50%;
    }
    .owl-next{
      background:none !important;
      border-radius: 10px !important;
     
      font-weight: bold;
      overflow: hidden;
        position:absolute;
        right:5% !important;

    }
    .owl-prev{
         background:none !important;
        border-radius: 10px !important;
        font-weight: bold;
        overflow: hidden;
        position:relative;      
          left:5% !important;
    }
    .owl-item .item img:hover .owl-prev{
        right: 100% !important;
    }
    .owl-item .item img:hover .owl-next{
        left: 0% !important;
        position: absolute;
    }
    .owl-theme .owl-controls .owl-buttons .owl-next:hover, .owl-theme .owl-controls .owl-buttons .owl-prev:hover{
      color:white;
      background:#2e85ae;
    }
    .owl-theme .owl-controls .owl-buttons .owl-next{
      right:135px;
    }
    .owl-theme .owl-controls .owl-buttons .owl-prev{
      left:135px;
    }
    .owl-pagination{
      position:absolute;
      bottom:50px;
      left:0;
      right:0;
    }
    .owl-controls{
      margin-top: 0px !important;
    }
    .owl-pagination .owl-page span{
        background:#fff !important;
        opacity: 1 !important;
    }

    .owl-pagination .active span{
        background:#0a659e !important;

    }
    #owl-ustora .item{
      margin: 10px 3px 0px 3px;
    }
    #owl-ustora .item img{
      display: block;
      width: 100%;
      height:auto;
      width:190px;
    }
    .navbar-brand{
      padding: 0px !important;
    }
    .container{
      padding-left: 4px !important;
    }
    .bg-dark{
      width: 100% !important;
      position: absolute;
      bottom: 0px !important;
      position: fixed;
      height: 30px;
      background:#008000;
    }
    .col-sm-2 img{
        width: 65%;
    }
    nav li{
      line-height: 100px;
      margin-top: 3px;
    }
}

@media only screen and (min-width: 701px){
    .navbar-brand h4{
      color: green !important;
      font-weight: bold;
      font-size: 21px;
      margin-top: 0px !important;
      text-align: center;
    }
}
/* Tablet Styles */
@media only screen and (min-width: 401px) and (max-width: 960px) {


    .navbar1{
        background:#fff;
    }
    section{
      padding: 0 !important;
    }
    img{
      margin-left: 100px;
      margin-bottom:35px;
    }
    body{
        font-family:;
    }
    .page-scroll{
      cursor: pointer !important;
    }

    .logo h3{
      margin-left: 0px !important;
    }

    .owl-theme .owl-controls .owl-buttons .owl-next, .owl-theme .owl-controls .owl-buttons .owl-prev{
      position:absolute;
      top:40%;
      opacity:1;
      color:#fff;
      font-weight:bold;
      font-size:63px;
      border-radius:50%;
    }
    .owl-next{
      background:none !important;
      border-radius: 10px !important;
     
      font-weight: bold;
      overflow: hidden;
        position:absolute;
        right:5% !important;

    }
    .owl-prev{
         background:none !important;
        border-radius: 10px !important;
        font-weight: bold;
        overflow: hidden;
        position:relative;      
          left:5% !important;
    }
    .owl-item .item img:hover .owl-prev{
        right: 100% !important;
    }
    .owl-item .item img:hover .owl-next{
        left: 0% !important;
        position: absolute;
    }
    .owl-theme .owl-controls .owl-buttons .owl-next:hover, .owl-theme .owl-controls .owl-buttons .owl-prev:hover{
      color:white;
      background:#2e85ae;
    }
    .owl-theme .owl-controls .owl-buttons .owl-next{
      right:135px;
    }
    .owl-theme .owl-controls .owl-buttons .owl-prev{
      left:135px;
    }
    .owl-pagination{
      position:absolute;
      bottom:50px;
      left:0;
      right:0;
    }
    .owl-controls{
      margin-top: 0px !important;
    }
    .owl-pagination .owl-page span{
        background:#fff !important;
        opacity: 1 !important;
    }

    .owl-pagination .active span{
        background:#0a659e !important;

    }
    #owl-ustora .item{
      margin: 10px 3px 0px 3px;
    }
    #owl-ustora .item img{
      display: block;
      width: 100%;
      height:auto;
      width:190px;
    }
    .navbar-brand{
      padding: 0px !important;
    }
    .container{
      padding-left: 4px !important;
    }
    .bg-dark{
      width: 100% !important;
      position: absolute;
      bottom: 0px !important;
      position: fixed;
      height: 30px;
      background:#008000;
    }
    #owl-demo .item img{
        width:107% !important;
        height:331px !important;
        margin-left: 0px !important;
    }

    .navbar-brand h4{
      color: green !important;
      font-weight: bold;
      font-size: 21px;
      margin-top: 0px !important;
      text-align: center;
    }
    nav{
      z-index: 99;
    }
    .col-sm-2 img{
        width: 11% !important;
    }
   
}

/* Mobile Styles */
@media only screen and (max-width: 400px) {
   
     #owl-demo .item img{
        width:107% !important;
        height:331px !important;
        margin-left: 0px !important;
    }
     .navbar-brand h4{
      color: green !important;
      font-weight: bold;
      font-size: 21px;
      margin-top: 0px !important;
      text-align: center;
    }
     nav{
      z-index: 99;
    }
      .bg-dark{
      width: 100% !important;
      position: absolute;
      position: fixed;
      height: 30px;
      background:#008000;
    }
    .bg-dark p{
      font-size: 10px;
      line-height: 10px;
    }
    #home{
      padding-bottom: 0px !important;
    }

    img{
      width: 10% !important;
      margin: 0px !important;
    }
     .col-sm-2 img{
        width: 11% !important;
    }
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

</style>
<body id="home">

 <div class="color navbar1">
        <div class="container">
            <div class="navbar-header">
                <div class="row">
                    <div class="center">
                
                    <div class="col-sm-12">
                         <BR>
                          
                        </h4>
                    </div>
                    </div>
                </div>
                
                
                
            </div>
        </div>
    </div>

<nav id="" class="navbar navbar-default">
<div class="container" >
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header" >
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
 
        <a class="navbar-brand page-scroll" href="#home">  
                    <h4>SENSUS PENDUDUK
                  </h4>
    </a>
    <br>
    <br>
    

    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
    
        
            <li>
            <a class="page-scroll" data-toggle="modal" data-target="#exampleModal">Login</a>
            </li>
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</div>
<!-- /.container -->
</nav>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <b><h2 class="modal-title" id="exampleModalLabel">Silahkan Login</h2></b>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post">
          Username
          <input type="text" name="username" placeholder="Masukan Username" required class="form-control">
          Password
          <input type="password" name="password"  placeholder="Masukan Password" required class="form-control"><br>
              <input type="submit" name="login" class="btn btn-primary" value="Login">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Section Intro Slider
================================================== -->
<section id="home">

  <div id="owl-demo" class="owl-carousel owl-theme">
   
      <div class="item"><img src="img/penduduk1.jpg" alt="buku2"></div>
      <div class="item"><img src="img/sensus pednduk.jpg" alt="buku3"></div>
   
      
      
  </div>


<!-- Section Fun Facts
================================================== -->


<div class="clearfix">
</div>

<!-- Section Portfolio
================================================== -->

<div class="clearfix">
</div>

<!-- Section Contact
================================================== -->

 <div class="content-wrapper">
        <div class="container">
            <div class="row">
      
   
      
            </div>
        </div>
    </div>
    <br><br>
<!-- Section Footer
================================================== -->
<section class="bg-dark">
<div class="container">
<div class="row">
    <div class="col-md-12 text-center">
        <p>
            &copy; 2019, Sensus Penduduk
        </p>
    </div>
</div>
</div>
</section>


<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/parallax.js"></script>
<script src="js/contact.js"></script>
<script src="js/countto.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/common.js"></script>

<?php 
include "koneksi.php";
 header('Content-Type: text/html; charset=UTF-8');

 if (isset($_POST['login'])) {
    $username= mysqli_real_escape_string($con,$_POST['username']);
    $password= mysqli_real_escape_string($con,$_POST['password']);
    $cek1=mysqli_query($con,"select * from users where email='$username' and password='$password'");
    $cek = mysqli_num_rows($cek1);
    $data = mysqli_fetch_array($cek1);
    
    if($cek > 0 ){
            session_start();

            $_SESSION['log']=$data['username'];
            $_SESSION['password']=$data['password'];
            $_SESSION['divisi']=$data['divisi'];

          
                   echo "<script type='text/javascript'>
                         setTimeout(function () { 
                         swal({
                                    title: 'Login Success',
                                    text:  'success',
                                    type: 'success',
                                    timer: 1700,
                                    showConfirmButton: true
                                });  
                         },10); 
                    document.location='home-admin.php'
                    </script>";       
        }
       else{
            echo '<script>
                    swal({
                          position: "center",
                          type: "error",
                          title: "Login Gagal",
                          showConfirmButton: false,
                          timer: 1500
                        });
                  </script>';
        }
  
 }

?>

  <script>
  $(document).ready(function() {
 
      $("#owl-demo").owlCarousel({
 
      navigation : true, // Show next and prev buttons
      slideSpeed : 800,
      paginationSpeed : 400,
      pagination:true,
      singleItem:true,
      navigationText: ["<",">"],
      autoPlay:3000,
      transitionStyle: "fade"
 
      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false
 
    });
 
    });
    
    $(document).ready(function() {
 
    $("#owl-ustora").owlCarousel({
 
    autoPlay: 3000, //Set AutoPlay to 3 seconds
  
    items : 4,
    itemsDesktop : [1199,3],
    itemsDesktopSmall : [979,3],
    pagination:false
    
 
    });
 
    });
    
  $(document).ready(function(){
  
    var navOffset = $("nav").offset().top;
    
    $("nav").wrap('<div class="nav-placeholder"></div>')
    $(".nav-placeholder").height(jQuery("nav").outerHeight());
    
    $("nav").wrapInner('<div class="nav-inner"</div>');
    
    $(window).scroll(function(){
      var scrollPos = jQuery(window).scrollTop();
      
      if (scrollPos >= navOffset) {
        $("nav").addClass("fixed");
      }
      else{
        $("nav").removeClass("fixed")
      }
    
    });
  });
   
  </script>
</body>
</html>