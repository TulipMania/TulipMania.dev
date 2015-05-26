<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tulip Mania</title>

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
    <link href='http://fonts.googleapis.com/css?family=Press+Start+2P' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link href="css/extralayers.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/extralayers.css" media="screen" /> 
    <link rel="stylesheet" type="text/css" href="css/settings.css" media="screen" />
    
    
</head>
<body>
    <article class="slider-wrapper">
        <div class="tp-banner-container">
            <div class="tp-banner">
                <ul>
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


    
            <div class="pcss3t pcss3t-layout-top-center">
                <input type="radio" name="pcss3t" checked  id="tab1"class="tab-content-first">
                <label for="tab1">login</label>
                
                <input type="radio" name="pcss3t" id="tab2" class="tab-content-2">
                <label for="tab2">signup</label>
            
                <ul>
                    <li class="tab-content tab-content-first typography">
                          <div class="naturallanguageform">
                        <div class="nlfinner">
                        {{ Form::open(array('action' => 'HomeController@checkLogin')) }}
                          <p class="line">
                            <span class="copy"></span>
                          </p>
                          <p class="line">
                            <span class="copy">Hi, my username (or e-mail) is </span>
                            <span class="inputcontainer">{{ Form::text('user_input',Input::old('user_input'), array('class' => 'textinput', 'id' =>"user_input", 'name' => "user_input")) }}</span> 
                            <span class="copy">and my password is </span>
                            <span class="inputcontainer">{{ Form::password('password', array('class' => 'textinput', 'id' =>"password", 'name' => "password")) }}</span>
                            <span class="copy">.</span>
                          </p>
                          <p class="line">
                            <input type="submit" value="Take Me To TulipMania"/>
                          </p>
                        {{ Form::close() }}
                        </div>
                      </div>
                    </li>
                    
                    <li class="tab-content tab-content-2 typography">
                      <div class="naturallanguageform">
                        <div class="nlfinner">
                        {{ Form::open(array('action' => 'HomeController@checkLogin')) }}
                          <p class="line">
                            <span class="copy"></span>
                          </p>
                          <p class="line">
                            <span class="copy">I don't have an account, but I sure do want one. My e-mail is</span>
                            <span class="inputcontainer"> {{ Form::text('newEmail',Input::old('newEmail'), array('class' => 'textinput', 'id' =>"newEmail", 'name' => "newEmail")) }}</span> 
                            <span class="copy">and I want my username to be </span>
                            <span class="inputcontainer"> {{ Form::text('newUser',Input::old('newUser'), array('class' => 'textinput', 'id' =>"newUser", 'name' => "newUser")) }}</span>
                            <span class="copy">a good password is</span>
                            <span class="inputcontainer">{{ Form::password('newPass', array('class' => 'textinput', 'id' =>"newPass", 'name' => "newPass")) }}</span>
                            <span class="copy">. Let's confirm that password</span>
                            <span class="inputcontainer">{{ Form::password('confirmPass',array('class' => 'textinput', 'id' =>"confirmPass", 'name' => "confirmPass")) }}</span>
                            <span class="copy">.</span>
                          </p>
                          <p class="line">
                            <input type="submit" value="Create My Account"/>
                          </p>
                        {{ Form::close() }}
                        </div>
                      </div>
                    </li>
                </ul>
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
 {{--    <div class="canvasContainer">
        <canvas class="contextCanvas" id='canvas' height="300" width="500"></canvas>
        <canvas id="layer2" style="z-index:2;position:absolute;left:0px;top:0px;" height="300px" width="500"></canvas>
    </div> --}}
   
                    </div>
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
                            <h3 class="section-mini-title color-purple">THE HISTORY BEHIND THE GAME</h3>
                            <hr class="general left">
                            <p>Tulip mania was a period in the Dutch Golden Age during which contract prices for bulbs of the recently introduced tulip reached extraordinarily high levels.
                            At the peak of tulip mania, in March 1637, some single tulip bulbs sold for more than 10 times the annual income of a skilled craftsman. It is generally considered the first recorded speculative bubble (or economic bubble).</p>
                        </div><!-- end col -->
                        <div class="col-md-6 margin-top-device">
                            <img src="images/sweet_painting.jpg" alt="" class="img-responsive wow bounceInRight">
                        </div><!-- end col -->
                    </div>
                    <div class="clearfix service-box-2">
                        <div class="col-md-6 margin-top-device">
                            <img src="images/fields.png" alt="" class="img-responsive wow bounceInLeft">
                        </div><!-- end col -->
                        <div class="col-md-6 margin-top-device">
                            <h3 class="section-mini-title color-green">TULIP FIELDS</h3>
                            <hr class="general left">
                            <p>Grow your own tulips and sell them on the open market!</p>
                        </div><!-- end col -->
                    </div>
                    <div class="clearfix service-box-2">
                        <div class="col-md-6 margin-top-device">
                            <h3 class="section-mini-title color-red">ADVENTURES</h3>
                            <hr class="general left">
                            <p>Take amazing adventures! Fight bears! Win money to buy more seeds!</p>
                        </div><!-- end col -->
                        <div class="col-md-6 margin-top-device">
                            <img src="images/adventure.png" alt="" class="img-responsive wow bounceInRight">
                        </div><!-- end col -->
                    </div>
                </div><!-- end row -->
            </div><!-- end service-list -->
        </div><!-- /.container -->
    </section><!-- end section -->
        {{-- i am a test for  something--}}
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
                                <h3 class="section-mini-title">JOSE D. GARZA</h3>
                                <h4 class="mini-title color-red">Developer</h4>
                                <hr class="general left">
                                <ul class="header-social text-left">
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div><!-- end col -->
                        </div><!-- end service-box -->
                        <div class="clearfix service-box-2 text-right">
                            <div class="col-md-9 margin-top-device">
                                <h3 class="section-mini-title">PABLO PIÑERO</h3>
                                <h4 class="mini-title color-red">Developer</h4>
                                <hr class="general left">
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
    <script src="js/index.js"></script> 
    <script src="https://cdn.rawgit.com/brehaut/color-js/master/color.js"></script>
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
                startheight:50,
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