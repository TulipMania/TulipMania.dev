<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Buzz - Onepage Website Template</title>

    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png" />

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/et-line.css" rel="stylesheet">
    <link href="css/flexslider.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/slider.css" rel="stylesheet">

        <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link href="css/extralayers.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/extralayers.css" media="screen" /> 
    <link rel="stylesheet" type="text/css" href="css/settings.css" media="screen" />
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>
<body>
    <article class="slider-wrapper">
        <div class="tp-banner-container">
            <div class="tp-banner">
                <ul>
                    <li data-transition="slideup" data-slotamount="3" data-masterspeed="1000" data-thumb="demos/slider_01.jpg"  data-saveperformance="off"  data-title="Parallax 3D">
    <h1 align="center">Tulip Mania!</h1>
        <div id="background-wrap">
            <div class="x1">
                <div class="cloud"></div>
            </div>

            <div class="x2">
                <div class="cloud"></div>
            </div>

            <div class="x3">
                <div class="cloud"></div>
            </div>
        </div>


    <div id="container" class="center-block">
    <div id="tabbox">
    <a href="#" id="signup" class="tab signup">Signup</a>
    <a href="#" id="login" class="tab select">Login</a>
    </div>
    <div id="panel">
    <div id="loginbox">
          {{ Form::open(array('action' => 'HomeController@checkLogin')) }}
              <br>
              {{ Form::text('user_input',Input::old('user_input'), array('class' => 'zocial-dribbble', 'id' =>"user_input", 'name' => "user_input", 'placeholder' => "User")) }}
              {{ Form::password('password', array('class' => 'zocial-dribbble', 'id' =>"password", 'name' => "password", 'placeholder' => "Password")) }}
                <input type="submit" value="Login"/>
          {{ Form::close() }}

    </div>

    <div id="signupbox">
            {{ Form::open(array('action' => 'HomeController@signUp')) }}

               {{ Form::text('newEmail',Input::old('newEmail'), array('class' => 'zocial-dribbble', 'id' =>"newEmail", 'name' => "newEmail", 'placeholder' => "Enter Your E-mail")) }}             

              {{ Form::text('newUser',Input::old('newUser'), array('class' => 'zocial-dribbble', 'id' =>"newUser", 'name' => "newUser", 'placeholder' => "Select A Username")) }}
              {{ Form::password('newPass', array('class' => 'zocial-dribbble', 'id' =>"newPass", 'name' => "newPass", 'placeholder' => "Create A Password")) }}
              {{ Form::password('confirmPass',array('class' => 'zocial-dribbble', 'id' =>"confirmPass", 'name' => "confirmPass", 'placeholder' => "Confirm Your Password")) }}

                <input type="submit" value="Sign Up"/>

            {{ Form::close() }}

    </div>
    </div>
    </div>
          <div style="display:block" class="pull-right">
            @foreach($errors->all() as $message)
                <span class="alert alert-danger">{{ $message }}</span>
            @endforeach
          </div>
            @if (Session::has('successMessage'))
                <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
            @endif
            
            @if (Session::has('errorMessage'))
                <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
            @endif
    <div class="canvasContainer">
        <canvas class="contextCanvas" id='canvas' height="300" width="500"></canvas>
        <canvas id="layer2" style="z-index:2;position:absolute;left:0px;top:0px;" height="300px" width="500"></canvas>
    </div>
   
                        </div>
                    </li>
                </ul>   
            </div>
        </div>  
    </article>
    
    <section class="section white-section">
        <div class="container">
            <div class="title-wrapper text-center">
                <h3 class="mini-title">ABOUT</h3>
                <h4 class="general-title">TULIP MANIA</h4>
                <img class="line wow fadeInUpBig" src="images/line3.png" alt="">
            </div><!-- end title-wrapper -->      

            <div class="service-list margin-top">
                <div class="row">
                    <div class="clearfix service-box-2">
                        <div class="col-md-6 margin-top-device">
                            <h3 class="section-mini-title color-purple">THE HISTORY</h3>
                            <hr class="general left">
                            <p>Cras tempus dolor nec magna accumsan tempus. Lorem ipsum dolor slit amet consectetuer adipiscing elit. Nam dui rhoncus. Proin risus tellus, bibendum sed volutpat sit amet ultrices vitae ante.</p>
                        </div><!-- end col -->
                        <div class="col-md-6 margin-top-device">
                            <img src="images/tulipmania.jpg" alt="" class="img-responsive wow bounceInRight">
                        </div><!-- end col -->
                    </div>
                    <div class="clearfix service-box-2">
                        <div class="col-md-6 margin-top-device">
                            <img src="images/service_02.png" alt="" class="img-responsive wow bounceInLeft">
                        </div><!-- end col -->
                        <div class="col-md-6 margin-top-device">
                            <h3 class="section-mini-title color-green">TULIP FIELDS</h3>
                            <hr class="general left">
                            <p>Cras tempus dolor nec magna accumsan tempus. Lorem ipsum dolor slit amet consectetuer adipiscing elit. Nam dui rhoncus. Proin risus tellus, bibendum sed volutpat sit amet ultrices vitae ante.</p>
                        </div><!-- end col -->
                    </div>
                    <div class="clearfix service-box-2">
                        <div class="col-md-6 margin-top-device">
                            <h3 class="section-mini-title color-red">ADVENTURES</h3>
                            <hr class="general left">
                            <p>Cras tempus dolor nec magna accumsan tempus. Lorem ipsum dolor slit amet consectetuer adipiscing elit. Nam dui rhoncus. Proin risus tellus, bibendum sed volutpat sit amet ultrices vitae ante.</p>
                        </div><!-- end col -->
                        <div class="col-md-6 margin-top-device">
                            <img src="images/service_03.png" alt="" class="img-responsive wow bounceInRight">
                        </div><!-- end col -->
                    </div>
                </div><!-- end row -->
            </div><!-- end service-list -->
        </div><!-- /.container -->
    </section><!-- end section -->
        
    <section id="team" class="section white-section">
        <div class="container">
            <div class="title-wrapper text-center">
                <h3 class="mini-title">CREATIVE MINDS BEHIND</h3>
                <h4 class="general-title">TULIP MANIA</h4>
                <img class="line wow fadeInUpBig" src="images/line1.png" alt="">
            </div><!-- end title-wrapper -->    
            <div class="team-list margin-top">
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="clearfix service-box-2">
                            <div class="col-md-3 margin-top-device">
                                <img src="images/jd.jpg" alt="" class="img-responsive wow bounceInLeft">
                            </div><!-- end col -->
                            <div class="col-md-9 margin-top-device">
                                <h3 class="section-mini-title">JOSE GARZA</h3>
                                <h4 class="mini-title color-red">Developer</h4>
                                <hr class="general left">
                                <p>Cras tempus dolor nec magna accumsan tempus. Lorem ipsum dolor slit amet consectetuer adipiscing<br>
                                 elit. Nam dui rhoncus. Proin risus tellus, bibendum sed volutpat sit amet ultrices vitae ante.</p>
                                <ul class="header-social text-left">
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div><!-- end col -->
                        </div><!-- end service-box -->
                        <div class="clearfix service-box-2 text-right">
                            <div class="col-md-9 margin-top-device">
                                <h3 class="section-mini-title">PABLO PINHEIRO</h3>
                                <h4 class="mini-title color-red">Developer & Author</h4>
                                <hr class="general left">
                                <p>Cras tempus dolor nec magna accumsan tempus. Lorem ipsum dolor slit amet consectetuer adipiscing<br>
                                 elit. Nam dui rhoncus. Proin risus tellus, bibendum sed volutpat sit amet ultrices vitae ante.</p>
                                <ul class="header-social text-left">
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div><!-- end col -->
                            <div class="col-md-3 margin-top-device">
                                <img src="images/pablops.jpeg" alt="" class="img-responsive wow bounceInRight">
                            </div><!-- end col --> 
                        </div><!-- end service-box -->
                        <div class="clearfix service-box-2">
                            <div class="col-md-3 margin-top-device">
                                <img src="images/ryan.jpeg" alt="" class="img-responsive wow bounceInLeft">
                            </div><!-- end col -->
                            <div class="col-md-9 margin-top-device">
                                <h3 class="section-mini-title">RYAN DINESMAN</h3>
                                <h4 class="mini-title color-red">Developer</h4>
                                <hr class="general left">
                                <p>Cras tempus dolor nec magna accumsan tempus. Lorem ipsum dolor slit amet consectetuer adipiscing<br>
                                 elit. Nam dui rhoncus. Proin risus tellus, bibendum sed volutpat sit amet ultrices vitae ante.</p>
                                <ul class="header-social text-left">
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div><!-- end col -->
                        </div><!-- end service-box -->
                    </div><!-- end  -->
                </div><!-- end row -->
            </div><!-- end team-list -->
        </div><!-- end container -->
    </section><!-- end section -->     
    <div class="dmtop yellow-section">Scroll to Top</div>
        
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/isotope.js"></script>
    <script src="js/portfolio.js"></script>
    <script src="js/parallax.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/smooth-scroll.js"></script>
    <script src="js/flexslider.js"></script>  
    <script src="js/jquery.custom.js"></script>  
    <script src="js/jquery.themepunch.revolution.min.js"></script>  
    <script src="js/jquery.themepunch.tools.min.js"></script>  
    <script>
    /* ==============================================
    REV SLIDER -->
    =============================================== */ 
    jQuery(document).ready(function() {
        jQuery('.tp-banner').show().revolution(
                {
                dottedOverlay:"none",
                delay:16000,
                startwidth:1170,
                startheight:850,
                hideThumbs:200,
                thumbWidth:100,
                thumbHeight:50,
                thumbAmount:4,
                navigationType:"none",
                navigationArrows:"solo",
                navigationStyle:"preview1",
                touchenabled:"on",
                onHoverStop:"on",
                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,
                parallax:"scroll",
                parallaxBgFreeze:"on",
                parallaxLevels:[10,20,30,40,50,60,70,80,90,100],
                keyboardNavigation:"off",
                navigationHAlign:"center",
                navigationVAlign:"bottom",
                navigationHOffset:0,
                navigationVOffset:20,
                soloArrowLeftHalign:"left",
                soloArrowLeftValign:"center",
                soloArrowLeftHOffset:20,
                soloArrowLeftVOffset:0,
                soloArrowRightHalign:"right",
                soloArrowRightValign:"center",
                soloArrowRightHOffset:20,
                soloArrowRightVOffset:0,
                shadow:0,
                fullWidth:"on",
                fullScreen:"on",
                spinner:"spinner4",
                stopLoop:"off",
                stopAfterLoops:-1,
                stopAtSlide:-1,
                shuffle:"off",
                autoHeight:"off",                       
                forceFullWidth:"on",                        
                hideThumbsOnMobile:"off",
                hideNavDelayOnMobile:1500,                      
                hideBulletsOnMobile:"off",
                hideArrowsOnMobile:"off",
                hideThumbsUnderResolution:0,
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                startWithSlide:0
        });                           
    }); //ready
    </script>

</body>
</html>