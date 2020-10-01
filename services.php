<!DOCTYPE html>
<html lang="en">
    
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MrEndless</title>

        <!-- fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7COswald:300,400,500,600,700" rel="stylesheet" type="text/css">
        
        <!-- styles --> 
        <link href="assets/css/plugins.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
        <style type="text/css">
            .demo{ background-color: #E4E1D9; }
.box{
    font-family: 'Kanit', sans-serif;
    text-align: center;
    border: 10px solid #fff;
    box-shadow: 1px 1px 2px #e6e6e6;
    overflow: hidden;
    position: relative;
}
.box:hover{ box-shadow: 13px 13px 15px rgba(0, 0, 0, 0.3); }
.box:before {
    content: "";
    background: linear-gradient(to left top,#21252903,#343a40);
    height: 100%;
    width: 100%;
    opacity: 0;
    position: absolute;
    left: 0;
    top: 0;
    transition: all 0.4s linear;
}
.box:hover:before{ opacity: 1; }
.box img{
    width: 100%;
    height: auto;
    transition: all 0.4s linear;
}
.box:hover img{
    opacity: 0;
    transform: scale(3);
}
.box .box-content{
    color: #fff;
    width: 100%;
    transform: translateY(-50%) scale(0);
    position: absolute;
    top: 50%;
    left: 0;
    transition: all 0.4s linear;
}
.box:hover .box-content{ transform: translateY(-50%) scale(1); }
.box .title{
    font-size: 25px;
    font-weight: 600;
    letter-spacing: 1px;
    text-transform: uppercase;
    margin: 0;
}
.box .post{
    font-size: 16px;
    text-transform: capitalize;
}
.box .icon{
    padding: 0;
    margin: 0;
    list-style: none;
    position: absolute;
    right: 8px;
    bottom: 10px;
}
.box .icon li{
    display: inline-block;
    margin: 0 1px;
    opacity: 0;
    transform: scale(1.3);
    transition: all 0.3s ease 0.4s;
}
.box:hover .icon li{
    opacity: 1;
    transform: scale(1);
}
.box:hover .icon li:nth-child(2){ transition: all 0.3s ease 0.2s; }
.box .icon li a{
    color: #11998e;
    background: #fff;
    font-size: 16px;
    line-height: 33px;
    height: 33px;
    width: 33px;
    border-radius: 50%;
    display: block;
    transition: all 0.5s ease;
}
.box .icon li  a:hover{
    color: #fff;
    background-color: #11998e;
    box-shadow: 0 0 5px #000;
}
@media only screen and (max-width:990px){
    .box { margin: 0 0 30px; }
}   
        </style>
    </head>
    <body class="loader">
        <!-- loading start -->
       <?php include('loader.php'); ?>
       <!-- loading end -->
        
        <!-- pointer start -->
        <div class="pointer" id="pointer">
            <i class="fas fa-long-arrow-alt-right"></i>
            <i class="fas fa-search"></i>
            <i class="fas fa-link"></i>
        </div><!-- pointer end -->
        
        <!-- to-top-btn start -->
        <a class="to-top-btn pointer-small" href="#up">
              <span class="to-top-arrow"></span>            
        </a><!-- to-top-btn end -->
        
        <!-- header start -->
        <header class="fixed-header">
            <!-- header-flex-box start -->
            <div class="header-flex-box">
                <!-- logo start -->
                <a href="index-2.html" class="logo pointer-large animsition-link">
                    <div class="logo-img-box">
                        <img class="logo-white" src="assets/images/logo/endless-logo-1.png" alt="logo">
                        <img class="logo-black" src="assets/images/logo/endless-logo-1.png" alt="logo">
                    </div>
                </a><!-- logo end -->
                
                <!-- menu-open start -->    
                <div class="menu-open pointer-large">
                    <span class="hamburger"></span>
                </div><!-- menu-open end -->
            </div><!-- header-flex-box end -->
        </header><!-- header end -->
        
        <!-- nav-container start -->   
        <?php include("header.php")?> 
        <!-- nav-container end -->
        
        <!-- animsition-overlay start -->
        <main class="animsition-overlay" data-animsition-overlay="true">
            <!-- page-head start -->
            <section id="up" class="page-head flex-min-height-box dark-bg-2">
                <!-- page-head-bg -->
                <div class="page-head-bg overlay-loading2" style="background-image: url(assets/images/backgrounds/bald-casual-facial-hair-1708528.jpg);"></div>
                
                <!-- flex-min-height-inner start -->
                <div class="flex-min-height-inner">
                    <!-- flex-container start -->
                    <div class="container top-bottom-padding-120 flex-container response-999">
                        <!-- column start -->
                        <div class="six-columns six-offset">
                            <div class="content-left-margin-40">
                                <h2 class="large-title-bold">
                                    <span class="load-title-fill tr-delay03" data-text="We’r Provided">We’r Provided</span><br>
                                    <span class="load-title-fill tr-delay04" data-text="Best Digital">Best Digital</span><br>
                                    <span class="load-title-fill tr-delay05" data-text="Services">Services</span>
                                </h2>
                                <p class="p-style-bold-up text-height-20 d-flex-wrap">
                                    <span class="load-title-fill tr-delay08" data-text="XOXO fam brunch">XOXO fam brunch</span>
                                    <span class="load-title-fill tr-delay09" data-text="retro intelligentsia">retro intelligentsia</span>
                                    <span class="load-title-fill tr-delay10" data-text="live-edge vegan">live-edge vegan</span>
                                </p>
                            </div>
                        </div><!-- column end -->
                    </div><!-- flex-container end -->
                </div><!-- flex-min-height-inner end -->
                
                <!-- scroll-btn start -->
                <a href="#down" class="scroll-btn pointer-large">
                    <div class="scroll-arrow-box">
                        <span class="scroll-arrow"></span>
                    </div>
                    <div class="scroll-btn-flip-box">
                        <span class="scroll-btn-flip" data-text="Scroll">Scroll</span>
                    </div>
                 </a><!-- scroll-btn end -->
            </section><!-- page-head end -->
            
  
            
            <!-- section start -->
            <section id="down"  class="light-bg-1" data-midnight="black">
                <!-- container start -->
                <div  class="container bottom-padding-60 top-padding-30">
                    <!-- text-center start -->
                    <div  data-animation-container class="text-center">
                        <h2 data-animation-container class="medium-title" style="text-align: center;">
                        <span  data-animation-child class="title-fill" data-animation="title-fill-anim" data-text="Services we provides"> Services we provides</span><br>
                    </h2>
                        <!-- <p data-animation-child class="fade-anim-box tr-delay02 text-color-1 xsmall-title-oswald top-margin-5" data-animation="fade-anim">We Create Best Products</p> -->
                    </div><!-- text-center end -->
                    <br>
                   <div  class="container bottom-padding-50 top-padding-20" >
    
                        <div class="row">
                            <div class="col-md-4 col-sm-6" >
                                <div class="row" >
                                    <div class="box" >
                                        <img src="assets/images/services/3d.jpg" alt="">
                                        <div class="box-content">
                                            <div class="content">
                                                <span style="font-size: 30px" class="title">3-D Modelling</span><br><br>
                                                <a href="3dmodelling.php">Know More</a>
                                            </div>    
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row" >
                                    
                                       <b style="margin-left: 28%;font-size: 30px"><a href="3dmodelling.php">3-D Modelling</a></b> 
                                    
                                </div>
                                
                            </div>
                           <div class="col-md-4 col-sm-6" >
                                <div class="row" >
                                    <div class="box" >
                                        <img src="assets/images/services/interior.jpg" alt="">
                                        <div class="box-content">
                                            <div class="content">
                                                <span style="font-size: 30px" class="title">Interior Designing</span><br><br>
                                                <a href="architectural.php">Know More</a>
                                            </div>    
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row" >
                                    
                                        <b style="margin-left: 20%;font-size: 30px"><a href="architectural.php">Interior Designing</a></b>
                                    
                                </div>
                                
                            </div>
                            <div class="col-md-4 col-sm-6" >
                                <div class="row" >
                                    <div class="box" >
                                        <img src="assets/images/services/vfx.jpg" alt="">
                                        <div class="box-content">
                                            <div class="content">
                                                <span style="font-size: 30px" class="title">VFX</span><br><br>
                                                <a href="vfx.php">Know More</a>
                                            </div>    
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row" >
                                    
                                        <b style="margin-left: 45%;font-size: 30px"><a href="vfx.php"> VFX</a></b>
                                    
                                </div>
                                
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-4 col-sm-6" >
                                <div class="row" >
                                    <div class="box" >
                                        <img src="assets/images/services/videoeditor.jpg" alt="">
                                        <div class="box-content">
                                            <div class="content">
                                                <span style="font-size: 30px" class="title"> Video Editing</span><br><br>
                                                <a href="videoediting.php">Know More</a>
                                            </div>    
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row" >
                                    
                                        <b style="margin-left: 25%;font-size: 30px"><a href="videoediting.php">Video Editing</a></b>
                                    
                                </div>
                                
                            </div>
                            <div class="col-md-4 col-sm-6" >
                                <div class="row" >
                                    <div class="box" >
                                        <img src="assets/images/services/logodesign.jpg" alt="">
                                        <div class="box-content">
                                            <div class="content">
                                                <span style="font-size: 30px" class="title">Logo Designing</span><br><br>
                                                <a href="logo.php">Know More</a>
                                            </div>    
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row" >
                                    
                                        <b style="margin-left: 25%;font-size: 30px"><a href="logo.php"> Logo Designing</a></b>
                                    
                                </div>
                                
                            </div>
                            <div class="col-md-2"></div>
                            
                        </div>

                    </div>


                </div><!-- container end -->
            </section><!-- section end -->
            
            
        </main><!-- animsition-overlay end -->
        
        <!-- footer start -->
         <?php include ("footer1.php")?>
       <!-- footer end -->
        
        <!-- scripts --> 
        <script src="assets/js/plugins.js"></script> 
        <script src="assets/js/main.js"></script>
    </body>


</html>