@include('includes.header')

 <!--=====================================-->
        <!--=       Hero Banner Area Start      =-->
        <!--=====================================-->
        <style>
            .jssorb051 .i {position:absolute;cursor:pointer;}
            .jssorb051 .i .b {fill:#fff;fill-opacity:0.5;stroke:#000;stroke-width:400;stroke-miterlimit:10;stroke-opacity:0.5;}
            .jssorb051 .i:hover .b {fill-opacity:.7;}
            .jssorb051 .iav .b {fill-opacity: 1;}
            .jssorb051 .i.idn {opacity:.3;}
        </style>
    
        <!--#region Arrow Navigator Skin -->
        <!-- Help: https://www.jssor.com/development/slider-with-arrow-navigator.html -->
        <style>
            .jssora051 {display:block;position:absolute;cursor:pointer;}
            .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
            .jssora051:hover {opacity:.8;}
            .jssora051.jssora051dn {opacity:.5;}
            .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
        </style>
    
            <script src="https://cdn.jsdelivr.net/npm/jssor-slider@28.0.0/js/jssor.slider.min.js"></script>
            <script>
            jssor_slider1_init = function () {
                var options = {
                    $FillMode: 2,                                       //[Optional] The way to fill image in slide, 0 stretch, 1 contain (keep aspect ratio and put all inside slide), 2 cover (keep aspect ratio and cover whole slide), 4 actual size, 5 contain for large image, actual size for small image, default value is 0
                    $AutoPlay: 1,                                    //[Optional] Auto play or not, to enable slideshow, this option must be set to greater than 0. Default value is 0. 0: no auto play, 1: continuously, 2: stop at last slide, 4: stop on click, 8: stop on user navigation (by arrow/bullet/thumbnail/drag/arrow key navigation)
                    $Idle: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                    $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1
    
                    $ArrowKeyNavigation: 1,                         //[Optional] Steps to go for each navigation request by pressing arrow key, default value is 1.
                    $SlideEasing: $Jease$.$OutQuint,          //[Optional] Specifies easing for right to left animation, default value is $Jease$.$OutQuad
                    $SlideDuration: 1200,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                    $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide, default value is 20
                    //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                    //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                    $SlideSpacing: 0,                                   //[Optional] Space between each slide in pixels, default value is 0
                    $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                    $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                    $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $Cols is greater than 1, or parking position is not 0)
                    
                    $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                        $Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
                        $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                        $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                        $Rows: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                        $SpacingX: 8,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                        $SpacingY: 8,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                        $Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                    },
    
                    $ArrowNavigatorOptions: {                       //[Optional] Options to specify and enable arrow navigator or not
                        $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                        $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                        $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                    }
                };
    
                var jssor_slider1 = new $JssorSlider$('slider1_container', options);
    
                /*#region responsive code begin*/
                //you can remove responsive code if you don't want the slider scales while window resizing
                function ScaleSlider() {
                    var bodyWidth = document.body.clientWidth;
                    if (bodyWidth)
                        jssor_slider1.$ScaleWidth(Math.min(bodyWidth, 1920));
                    else
                        $Jssor$.$Delay(ScaleSlider, 30);
                }
    
                ScaleSlider();
                $Jssor$.$AddEvent(window, "load", ScaleSlider);
    
                $Jssor$.$AddEvent(window, "resize", ScaleSlider);
                $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
                /*#endregion responsive code end*/
            };
        </script>

            @php
            $banners = App\Models\Banner::all();
            @endphp
         @if (count($banners)>0)
             
        <div id="slider1_container" style="position: relative; margin: 0 auto;
            top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
            
            <!-- Loading Screen -->
            <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="../svg/loading/static-svg/spin.svg" />
            </div>
    
            <!-- Slides Container -->
            <div data-u="slides" style="position: absolute; left: 0px; top: 0px; width: 1500px;
                height: 600px; overflow: hidden;">

                @foreach ($banners as $banner)
                <div>
                    <img data-u="image" src="{{$banner->image}}" alt="" />
                    <div style="position: absolute; width: 480px; height: 120px; top: 30px; left: 30px; padding: 5px;
                        text-align: left; line-height: 60px; text-transform: uppercase; font-size: 50px;
                            color: #FFFFFF;">{{$banner->heading}}
                    </div>
                    <div style="position: absolute; width: 480px; height: 120px; top: 300px; left: 30px; padding: 5px;
                        text-align: left; line-height: 36px; font-size: 30px;
                            color: #FFFFFF;">
                            {{$banner->description}}
                    </div>
                </div>
                @endforeach
               
            </div>
                    
            <!--#region Bullet Navigator Skin Begin -->
            <!-- Help: https://www.jssor.com/development/slider-with-bullet-navigator.html -->
            <div data-u="navigator" class="jssorb051" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                <div data-u="prototype" class="i" style="width:20px;height:20px;">
                    <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                        <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                    </svg>
                </div>
            </div>
            <!--#endregion Bullet Navigator Skin End -->
            
            <!--#region Arrow Navigator Skin Begin -->
            <!-- Help: https://www.jssor.com/development/slider-with-arrow-navigator.html -->
            <div data-u="arrowleft" class="jssora051" style="width:75px;height:75px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
                </svg>
            </div>
            <div data-u="arrowright" class="jssora051" style="width:75px;height:75px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
                </svg>
            </div>
            <!--#endregion Arrow Navigator Skin End -->
    
    
        </div>

        @endif
        <!-- Trigger -->
        <script>
            jssor_slider1_init();
        </script>
       
            <!--=====================================-->
            <!--=       Features Area Start      =-->
            <!--=====================================-->
            <!-- Start Categories Area  -->
            <div class="features-area-2">
                <div class="container">
                    <div class="features-grid-wrap">
                        <div class="features-box features-style-2 edublink-svg-animate">
                            <div class="icon">
                                <img class="svgInject" src="assets/images/animated-svg-icons/online-class.svg" alt="animated icon">
                            </div>
                            <div class="content">
                                <h5 class="title"><span>100+</span> Online Classes</h5>
                            </div>
                        </div>
                        <div class="features-box features-style-2 edublink-svg-animate">
                            <div class="icon">
                                <img class="svgInject" src="assets/images/animated-svg-icons/instructor.svg" alt="animated icon">
                            </div>
                            <div class="content">
                                <h5 class="title"><span>Top </span>Teachers</h5>
                            </div>
                        </div>
                        <div class="features-box features-style-2 edublink-svg-animate">
                            <div class="icon certificate">
                                <img class="svgInject" src="assets/images/animated-svg-icons/certificate.svg" alt="animated icon">
                            </div>
                            <div class="content">
                                <h5 class="title"><span>10+</span>Academic Clubs</h5>
                            </div>
                        </div>
                        <div class="features-box features-style-2 edublink-svg-animate">
                            <div class="icon">
                                <img class="svgInject" src="assets/images/animated-svg-icons/user.svg" alt="animated icon">
                            </div>
                            <div class="content">
                                <h5 class="title"><span>1200+</span>Students</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <!-- Start  Marquee Area  -->
    
            
    
            <!--End Marqee Area-->
    
            <!-- End Categories Area  -->
            <!--=====================================-->
            <!--=       Categories Area Start      =-->
            <!--=====================================-->
            <!-- Start Categories Area  -->
            <div class="edu-categorie-area categorie-area-2 edu-section-gap">
                <div class="container">
                    <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <h2 class="title">What At Golden Harrier?</h2>
                        <span class="shape-line"><i class="icon-19"></i></span>
                        <p>What At Golden Harrier?</p>
                    </div>
    
                    <div class="row g-5">
                        <div class="col-lg-4 col-md-6" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                            <div class="categorie-grid categorie-style-2 color-primary-style edublink-svg-animate">
                                <div class="icon">
                                    <i class="icon-9"></i>
                                </div>
                                <div class="content">
                                    <a href="course-one.html">
                                        <h5 class="title">Special Education</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-lg-4 col-md-6" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                            <div class="categorie-grid categorie-style-2 color-secondary-style">
                                <div class="icon">
                                    <i class="icon-10 art-design"></i>
                                </div>
                                <div class="content">
                                    <a href="course-one.html">
                                        <h5 class="title">NCC</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-lg-4 col-md-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <div class="categorie-grid categorie-style-2 color-extra01-style">
                                <div class="icon">
                                    <i class="icon-11 personal-development"></i>
                                </div>
                                <div class="content">
                                    <a href="course-one.html">
                                        <h5 class="title">Qualified Teachers</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-lg-4 col-md-6" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                            <div class="categorie-grid categorie-style-2 color-tertiary-style">
                                <div class="icon">
                                    <i class="icon-12 health-fitness"></i>
                                </div>
                                <div class="content">
                                    <a href="course-one.html">
                                        <h5 class="title">Events</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-lg-4 col-md-6" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                            <div class="categorie-grid categorie-style-2 color-extra02-style">
                                <div class="icon">
                                    <i class="icon-13 data-science"></i>
                                </div>
                                <div class="content">
                                    <a href="course-one.html">
                                        <h5 class="title">Online Classes</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-lg-4 col-md-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <div class="categorie-grid categorie-style-2 color-extra03-style">
                                <div class="icon">
                                    <i class="icon-14"></i>
                                </div>
                                <div class="content">
                                    <a href="course-one.html">
                                        <h5 class="title">Coding Class</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-lg-4 col-md-6" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                            <div class="categorie-grid categorie-style-2 color-extra04-style">
                                <div class="icon">
                                    <i class="icon-15"></i>
                                </div>
                                <div class="content">
                                    <a href="course-one.html">
                                        <h5 class="title">Sports</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-lg-4 col-md-6" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                            <div class="categorie-grid categorie-style-2 color-extra05-style">
                                <div class="icon">
                                    <i class="icon-16 computer-science"></i>
                                </div>
                                <div class="content">
                                    <a href="course-one.html">
                                        <h5 class="title">Computer Science</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-lg-4 col-md-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <div class="categorie-grid categorie-style-2 color-extra06-style">
                                <div class="icon">
                                    <i class="icon-17 video-photography"></i>
                                </div>
                                <div class="content">
                                    <a href="course-one.html">
                                        <h5 class="title">Smart Classrooms</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Categories Area  -->
            <!--=====================================-->
            <!--=       About Us Area Start      	=-->
            <!--=====================================-->
            <div class="gap-bottom-equal edu-about-area about-style-1">
                <div class="container edublink-animated-shape">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6">
                            <div class="about-image-gallery">
                                <img class="main-img-1" src="https://i.imgur.com/czsgXnf.jpg" alt="About Image"/>
                                <div class="video-box" data-sal-delay="150" data-sal="slide-down" data-sal-duration="800">
                                    <div class="inner">
                                        <div class="thumb">
                                            <img src="https://i.imgur.com/mxaPPe7.jpg" style="height: 150px;" alt="About Image"/>
                                            <a href="https://www.youtube.com/watch?v=QM2rUg2gQAc" class="popup-icon video-popup-activation">
                                                <i class="icon-18"></i>
                                            </a>
                                        </div>
                                        <div class="loading-bar">
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="award-status bounce-slide">
                                    <div class="inner">
                                        <div class="icon">
                                            <i class="icon-21"></i>
                                        </div>
                                        <div class="content">
                                            <h6 class="title">100+</h6>
                                            <span class="subtitle">Wonderful Awards</span>
                                        </div>
                                    </div>
                                </div>
                                <ul class="shape-group">
                                    <li class="shape-1 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                        <img data-depth="1" src="assets/images/about/shape-36.png" alt="Shape">
                                    </li>
                                    <li class="shape-2 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                        <img data-depth="-1" src="assets/images/about/shape-37.png" alt="Shape">
                                    </li>
                                    <li class="shape-3 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                        <img data-depth="1" src="assets/images/about/shape-02.png" alt="Shape">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6" data-sal-delay="150" data-sal="slide-left" data-sal-duration="800">
                            <div class="about-content">
                                <div class="section-title section-left">
                                    <span class="pre-title">Education @Golden Harrier</span>
                                    <h2 class="title">Interface Friendly Learning At <span class="color-secondary">Golden Harrier</span></h2>
                                    <span class="shape-line"><i class="icon-19"></i></span>
                                    <p>The Guiding Vision of the School is to Provide Innovation based Education, The Foundation of the School has been laid with the Nobel thought of Imparting Quality Education to bring up Students with an Imaginative, Innovative and intuitive mind.</p>
                                </div>
                                <ul class="features-list">
                                    <li>State-of-the-art Infrastructure.</li>
                                    <li>Centrally air conditioned.</li>
                                    <li>Fully furnished computer and multimedia labs.</li>
                                    <li>Regular parent-teacher orientation.</li>
                                    <li>CCTV and GPS enabled transport facility.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <ul class="shape-group">
                        <li class="shape-1 circle scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                            <span data-depth="-2.3"></span>
                        </li>
                    </ul>
                </div>
            </div>
            <!--=====================================-->
            <!--=       Course Area Start      		=-->
            <!--=====================================-->
            <!-- Start Course Area  -->
           
            <!-- End Course Area -->
            <!--=====================================-->
            <!--=       CounterUp Area Start      	=-->
            <!--=====================================-->
            <div class="counterup-area-2">
                <div class="container">
                    <div class="row g-5 justify-content-center">
                        <div class="col-lg-8">
                            <div class="counterup-box-wrap">
                                <div class="counterup-box counterup-box-1">
                                    <div class="edu-counterup counterup-style-2">
                                        <h2 class="counter-item count-number primary-color">
                                            <span class="odometer" data-odometer-final="5">.</span><span>K</span>
                                        </h2>
                                        <h6 class="title">Student Enrolled</h6>
                                    </div>
                                    <div class="edu-counterup counterup-style-2">
                                        <h2 class="counter-item count-number secondary-color">
                                            <span class="odometer" data-odometer-final="15">.</span><span>K</span>
                                        </h2>
                                        <h6 class="title">Class Completed</h6>
                                    </div>
                                </div>
                                <div class="counterup-box counterup-box-2">
                                    <div class="edu-counterup counterup-style-2">
                                        <h2 class="counter-item count-number extra05-color">
                                            <span class="odometer" data-odometer-final="350">.</span><span>+</span>
                                        </h2>
                                        <h6 class="title">Top Teachers</h6>
                                    </div>
                                    <div class="edu-counterup counterup-style-2">
                                        <h2 class="counter-item count-number extra02-color">
                                            <span class="odometer" data-odometer-final="99.9">.</span><span>%</span>
                                        </h2>
                                        <h6 class="title">Satisfaction Rate</h6>
                                    </div>
                                </div>
                                <ul class="shape-group">
                                    <li class="shape-1 scene">
                                        <img data-depth="-2" src="assets/images/about/shape-13.png" alt="Shape">
                                    </li>
                                    <li class="shape-2">
                                        <img class="rotateit" src="assets/images/counterup/shape-02.png" alt="Shape">
                                    </li>
                                    <li class="shape-3 scene">
                                        <img data-depth="1.6" src="assets/images/counterup/shape-04.png" alt="Shape">
                                    </li>
                                    <li class="shape-4 scene">
                                        <img data-depth="-1.6" src="assets/images/counterup/shape-05.png" alt="Shape">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--=====================================-->
            <!--=       Testimonial Area Start      =-->
            <!--=====================================-->
            <!-- Start Testimonial Area  -->
            <div class="testimonial-area-1 section-gap-equal">
                <div class="container">
                    <div class="row g-lg-5">
                        <div class="col-lg-5">
                            <div class="testimonial-heading-area">
                                <div class="section-title section-left" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                                    <span class="pre-title">Student Testimonials</span>
                                    <h2 class="title">What Our Students Have To Say</h2>
                                    <span class="shape-line"><i class="icon-19"></i></span>
                                    <p>What our students have to say about Golden Harrier School</p>
                                    <a href="#" class="edu-btn btn-large">View All<i class="icon-4"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="home-one-testimonial-activator swiper ">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="testimonial-grid">
                                            <div class="thumbnail">
                                                <img src="https://i.imgur.com/uBCz7kG.jpg" alt="Testimonial">
                                                <span class="qoute-icon"><i class="icon-26"></i></span>
    
                                            </div>
                                            <div class="content">
                                                <p>Hello, I am Tannu from class XII C. Golden Harrier School is providing the best quality education to us. Faculties are very supportive and caring. They teaches us with fact & details and totally conceptual based learning.Thanks to teachers for guiding me.</p>
                                                <div class="rating-icon">
                                                    <i class="icon-23"></i>
                                                    <i class="icon-23"></i>
                                                    <i class="icon-23"></i>
                                                    <i class="icon-23"></i>
                                                    <i class="icon-23"></i>
                                                </div>
                                                <h5 class="title">Tannu</h5>
                                                <span class="subtitle">Student - class XII C</span>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="swiper-slide">
                                        <div class="testimonial-grid">
                                            <div class="thumbnail">
                                                <img src="https://i.imgur.com/OKcAbKN.jpg" alt="Testimonial">
                                                <span class="qoute-icon"><i class="icon-26"></i></span>
    
                                            </div>
                                            <div class="content">
                                                <p>Hello,I am Dhovidh from the 2022-23 batch. Golden Harrier School is giving the best education to kids along with all sports facilities. As we know sports keep us physically and mentally fit. School has all sports like gymnastics, basketball, football etc.</p>
                                                <div class="rating-icon">
                                                    <i class="icon-23"></i>
                                                    <i class="icon-23"></i>
                                                    <i class="icon-23"></i>
                                                    <i class="icon-23"></i>
                                                    <i class="icon-23"></i>
                                                </div>
                                                <h5 class="title">Dhovidh</h5>
                                                <span class="subtitle">Student - class XII B</span>
                                            </div>
                                        </div>
                                    </div>
    
    
                                    <div class="swiper-slide">
                                        <div class="testimonial-grid">
                                            <div class="thumbnail">
                                                <img src="https://i.imgur.com/MWM6MlV.jpg" alt="Testimonial">
                                                <span class="qoute-icon"><i class="icon-26"></i></span>
    
                                            </div>
                                            <div class="content">
                                                <p>Hello friends, I am Tanushree from the 2022-23  batch. Golden Harrier School is the best school in this region . Pollution  free campus with all facilities like well equipped labs, smart classes. All the teachers are very helpful and dedicated  towards our studies .</p>
                                                <div class="rating-icon">
                                                    <i class="icon-23"></i>
                                                    <i class="icon-23"></i>
                                                    <i class="icon-23"></i>
                                                    <i class="icon-23"></i>
                                                    <i class="icon-23"></i>
                                                </div>
                                                <h5 class="title">Tanushree </h5>
                                                <span class="subtitle">Student - class XII A</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- <div class="swiper-slide">
                                        <div class="testimonial-grid">
                                            <div class="thumbnail">
                                                <img src="assets/images/testimonial/testimonial-04.png" alt="Testimonial">
                                                <span class="qoute-icon"><i class="icon-26"></i></span>
    
                                            </div>
                                            <div class="content">
                                                <p>Lorem ipsum dolor amet consec tur elit adicing sed do usmod zx tempor enim minim veniam quis nostrud exer citation.</p>
                                                <div class="rating-icon">
                                                    <i class="icon-23"></i>
                                                    <i class="icon-23"></i>
                                                    <i class="icon-23"></i>
                                                    <i class="icon-23"></i>
                                                    <i class="icon-23"></i>
                                                </div>
                                                <h5 class="title">Robert Tapp</h5>
                                                <span class="subtitle">Content Creator</span>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Testimonial Area  -->
    
    
            <!--Gallary Art Start-->
                <div class="edu-gallery-area edu-section-gap" style="padding: 0px 0 120px;">
                <div class="container">
                    <h3 class="text-center">Golden Harrier Gallary</h3>
                    <div class="isotope-wrapper">
                        <div class="isotop-button button-transparent isotop-filter">
                            <button data-filter="*" class="is-checked">
                                <span class="filter-text">All</span>
                            </button>
                            <button data-filter=".education" class="">
                                <span class="filter-text">Events</span>
                            </button>
                            <button data-filter=".marketing">
                                <span class="filter-text">Sports</span>
                            </button>
                            <button data-filter=".development">
                                <span class="filter-text">Campus</span>
                            </button>
                            <!-- <button data-filter=".health">
                                <span class="filter-text">Health</span>
                            </button> -->
                        </div>
                        <div class="isotope-list gallery-grid-wrap" style="position: relative; height: 2131.01px;">
                            <div id="animated-thumbnials" lg-uid="lg0">
    
    
                                <a href="https://i.imgur.com/SrgX28Y.jpg" class="edu-popup-image edu-gallery-grid isotope-item education" lg-event-uid="&amp;1" style="position: absolute; left: 0%; top: 0px;">
                                    <div class="thumbnail">
                                        <img src="https://i.imgur.com/SrgX28Y.jpg" alt="Gallery Image">
                                    </div>
                                    <div class="zoom-icon">
                                        <i class="icon-69"></i>
                                    </div>
                                </a>
    
    
                                <a href="https://i.imgur.com/0JJkadM.jpg" class="edu-popup-image edu-gallery-grid isotope-item marketing" lg-event-uid="&amp;2" style="position: absolute; left: 43.1667%; top: 0px;">
                                    <div class="thumbnail">
                                        <img src="https://i.imgur.com/0JJkadM.jpg" alt="Gallery Image">
                                    </div>
                                    <div class="zoom-icon">
                                        <i class="icon-69"></i>
                                    </div>
                                </a>
    
    
                                <a href="https://i.imgur.com/L4owvEc.jpg" class="edu-popup-image edu-gallery-grid isotope-item education health" lg-event-uid="&amp;3" style="position: absolute; left: 0%; top: 426px;">
                                    <div class="thumbnail">
                                        <img src="https://i.imgur.com/L4owvEc.jpg" alt="Gallery Image">
                                    </div>
                                    <div class="zoom-icon">
                                        <i class="icon-69"></i>
                                    </div>
                                </a>
    
    
                                <a href="https://i.imgur.com/RGA96SP.jpg" class="edu-popup-image edu-gallery-grid isotope-item marketing" lg-event-uid="&amp;4" style="position: absolute; left: 43.1667%; top: 426px;">
                                    <div class="thumbnail">
                                        <img src="https://i.imgur.com/RGA96SP.jpg" alt="Gallery Image">
                                    </div>
                                    <div class="zoom-icon">
                                        <i class="icon-69"></i>
                                    </div>
                                </a>
    
    
                                <a href="https://i.imgur.com/fbbQG1T.jpg" class="edu-popup-image edu-gallery-grid isotope-item education" lg-event-uid="&amp;5" style="position: absolute; left: 0%; top: 852px;">
                                    <div class="thumbnail">
                                        <img src="https://i.imgur.com/fbbQG1T.jpg" alt="Gallery Image">
                                    </div>
                                    <div class="zoom-icon">
                                        <i class="icon-69"></i>
                                    </div>
                                </a>
    
    
                                <a href="https://i.imgur.com/VvI2tUQ.jpg" class="edu-popup-image edu-gallery-grid isotope-item health" lg-event-uid="&amp;6" style="position: absolute; left: 43.1667%; top: 852px;">
                                    <div class="thumbnail">
                                        <img src="https://imgur.com/VvI2tUQ.jpg" alt="Gallery Image">
                                    </div>
                                    <div class="zoom-icon">
                                        <i class="icon-69"></i>
                                    </div>
                                </a>
    
    
                                <a href="https://i.imgur.com/1qNVnVM.jpg" class="edu-popup-image edu-gallery-grid isotope-item development" lg-event-uid="&amp;7" style="position: absolute; left: 0%; top: 1278px;">
                                    <div class="thumbnail">
                                        <img src="https://i.imgur.com/1qNVnVM.jpg" alt="Gallery Image">
                                    </div>
                                    <div class="zoom-icon">
                                        <i class="icon-69"></i>
                                    </div>
                                </a>
    
    
                                <a href="https://i.imgur.com/0IGNqMB.jpg" class="edu-popup-image edu-gallery-grid isotope-item marketing health" lg-event-uid="&amp;8" style="position: absolute; left: 43.1667%; top: 1278px;">
                                    <div class="thumbnail">
                                        <img src="https://i.imgur.com/0IGNqMB.jpg" alt="Gallery Image">
                                    </div>
                                    <div class="zoom-icon">
                                        <i class="icon-69"></i>
                                    </div>
                                </a>
    
    
                                <a href="https://i.imgur.com/pv7GmlQ.jpg" class="edu-popup-image edu-gallery-grid isotope-item development" lg-event-uid="&amp;9" style="position: absolute; left: 0%; top: 1704px;">
                                    <div class="thumbnail">
                                        <img src="https://i.imgur.com/pv7GmlQ.jpg" alt="Gallery Image">
                                    </div>
                                    <div class="zoom-icon">
                                        <i class="icon-69"></i>
                                    </div>
                                </a>
    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Gallary Art End-->
    
            <!--=====================================-->
            <!--=      		Team Area Start   		=-->
            <!--=====================================-->
            <!-- Start Team Area  -->

            @php
                $teachers = App\Models\Teacher::all()->random(4);
            @endphp

            @if (count($teachers)>0)
                
            <div class="edu-team-area team-area-1 gap-tb-text -mt-5" style="padding: 0px 0 112px !important;">
                <div class="container">
                    <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <span class="pre-title">Teachers</span>
                        <h2 class="title">Our Teachers</h2>
                        <span class="shape-line"><i class="icon-19"></i></span>
                    </div>
                    <div class="row g-5">
                       @foreach ($teachers as $teacher)
                           <!-- Start Instructor Grid  -->
                        <div class="col-lg-3 col-sm-6 col-12" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                            <div class="edu-team-grid team-style-1">
                                <div class="inner">
                                    <div class="thumbnail-wrap">
                                        <div class="thumbnail">
                                            <a href="{{$teacher->image}}">
                                                <img src="{{$teacher->image}}" style="height:320px;" alt="team images">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h5 class="title">{{$teacher->name}}</h5>
                                        <span class="designation">{{$teacher->designation}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Instructor Grid  -->
                       @endforeach
                        
                       
                       
                    </div>
                </div>
            </div>

            @endif
    
    
            <div class="edu-faq-area faq-style-1" style="background-color: #eeeeee78;">
                <div class="container">
                    <div class="row g-5 row--45">
                        <div class="col-lg-6">
                            <div class="edu-faq-gallery">
                                <div class="row g-5">
                                    <div class="col-6 sal-animate" data-sal-delay="50" data-sal="slide-right" data-sal-duration="800">
                                        <div class="faq-thumbnail thumbnail-1">
                                            <img src="https://i.imgur.com/kfKs460.jpg" alt="Faq Images">
                                        </div>
                                    </div>
                                    <div class="col-6 sal-animate" data-sal-delay="100" data-sal="slide-left" data-sal-duration="800">
                                        <div class="faq-thumbnail thumbnail-2">
                                            <img src="https://i.imgur.com/EAWytxu.jpg" alt="Faq Images">
                                        </div>
                                    </div>
                                    <div class="col-6 sal-animate" data-sal-delay="50" data-sal="slide-right" data-sal-duration="800">
                                        <div class="faq-thumbnail thumbnail-3">
                                            <img src="https://i.imgur.com/oWMIYuL.jpg" alt="Faq Images">
                                        </div>
                                    </div>
                                    <div class="col-6 sal-animate" data-sal-delay="100" data-sal="slide-left" data-sal-duration="800">
                                        <div class="faq-thumbnail thumbnail-4">
                                            <img src="https://i.imgur.com/vKwjBQW.jpg" alt="Faq Images">
                                        </div>
                                    </div>
                                </div>
                                <ul class="shape-group">
                                    <li class="shape-1 scene shape-light sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="200" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                                        <img data-depth="2" src="assets/images/faq/shape-02.png" alt="Shape Images" style="transform: translate3d(1.8px, -15.2px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                                    </li>
                                    <li class="shape-1 scene shape-dark sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="200" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                                        <img data-depth="1.5" src="assets/images/faq/dark-shape-02.png" alt="Shape Images" style="transform: translate3d(1.3px, -11.4px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                                    </li>
                                    <li class="shape-2 scene sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="200" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                                        <img data-depth="-2" src="assets/images/faq/shape-03.png" alt="Shape Images" style="transform: translate3d(-1.3px, 26.1px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                                    </li>
                                    <li class="shape-3 scene sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="200" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                                        <img data-depth="2" src="assets/images/faq/shape-04.png" alt="Shape Images" style="transform: translate3d(1.7px, -23.8px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                                    </li>
                                    <li class="shape-4 scene sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="200" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                                        <img data-depth="-2" src="assets/images/faq/shape-05.png" alt="Shape Images" style="transform: translate3d(-2.2px, 26.4px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 sal-animate" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                            <div class="edu-faq-content">
                                <div class="section-title section-left">
                                    <span class="pre-title">FAq’s</span>
                                    <h2 class="title">8+ years of <span class="color-secondary">Excellence </span> in Education</h2>
                                    <span class="shape-line"><i class="icon-19"></i></span>
                                </div>
                                <div class="faq-accordion" id="faq-accordion">
                                    <div class="accordion">
                                        <div class="accordion-item">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false">
                                                    What kind of security offered to the students?
                                                </button>
                                            </h5>
                                            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#faq-accordion" style="">
                                                <div class="accordion-body">
                                                    <p>The school has installed CCTV in all classrooms,corridors,buses etc. Students are always accompanied by teachers when they are moving from one block of the building to others.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false">
                                                    Why should you choose Golden Harrier School?
                                                </button>
                                            </h5>
                                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faq-accordion" style="">
                                                <div class="accordion-body">
                                                    <p>Golden Harrier School is providing the best education to your kids by the experienced faculties.Well furnished laboratories,smart classes and various sports features.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false">
                                                    What is the admission procedure?
                                                </button>
                                            </h5>
                                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faq-accordion" style="">
                                                <div class="accordion-body">
                                                    <p>For those seeking admissions, a written test  will be conducted of the student and an informal interaction of the student with their parents. . The final decision on the basis of written test and informal interaction will  be binding by the admission commitee.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <ul class="shape-group">
                                    <li class="shape-1 scene shape-light sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="200" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                                        <img data-depth="1.5" src="assets/images/about/shape-02.png" alt="Shape Images" style="transform: translate3d(2.2px, -28.7px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                                    </li>
                                    <li class="shape-2 scene sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="200" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                                        <span data-depth="-2.2" style="transform: translate3d(-1.2px, 15.2px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;"></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
    
    
            <div class="edu-blog-area blog-area-1 edu-section-gap">
                <div class="container">
                    <div class="section-title section-center" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                        <span class="pre-title">Latest News</span>
                        <h2 class="title">Get News From Golden Harrier</h2>
                        <span class="shape-line"><i class="icon-19"></i></span>
                    </div>
                    <div class="row g-5">
                        <!-- Start Blog Grid  -->
                        <div class="col-lg-4 col-md-6 col-12" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                            <div class="edu-blog blog-style-1">
                                <div class="inner">
                                    <div class="thumbnail">
                                        <a href="#">
                                            <img src="https://imgur.com/2f7JcpG.jpg" style="height:350px;" alt="Blog Images">
                                        </a>
                                    </div>
                                    <div class="content position-top">
                                        <div class="read-more-btn">
                                            <a class="btn-icon-round" href="#"><i class="icon-4"></i></a>
                                        </div>
                                        <div class="category-wrap">
                                            <a href="#" class="blog-category">Sports</a>
                                        </div>
                                        <h5 class="title"><a href="#">Abhishek Won Gold Medal at state Level</a></h5>
                                        <ul class="blog-meta">
                                            <li><i class="icon-27"></i>07 May</li>
                                            <li><i class="icon-2"></i>High Jump</li>
                                        </ul>
                                        <p>Congratulations for your fabulous victory! Congrats Abhishek from Golden Harrier School on winning a gold medal in high jump in 32nd north zone junior athletic championship.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Blog Grid  -->
                        
                        <!-- Start Blog Grid  -->
                        <div class="col-lg-4 col-md-6 col-12" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                            <div class="edu-blog blog-style-1">
                                <div class="inner">
                                    <div class="thumbnail">
                                        <a href="#">
                                            <img src="https://imgur.com/eW9lZsl.jpg" style="height:350px;" alt="Blog Images">
                                        </a>
                                    </div>
                                    <div class="content position-top">
                                        <div class="read-more-btn">
                                            <a class="btn-icon-round" href="#"><i class="icon-4"></i></a>
                                        </div>
                                        <div class="category-wrap">
                                            <a href="#" class="blog-category">Sports</a>
                                        </div>
                                        <h5 class="title"><a href="#">Ronak won the Bronze Medal at State Level</a></h5>
                                        <ul class="blog-meta">
                                            <li><i class="icon-27"></i>07 Oct</li>
                                            <li><i class="icon-2"></i>Long jump</li>
                                        </ul>
                                        <p>Congratulations for your amazing victory ! Congrats Ronak from Golden Harrier School on winning a Bronze Medal in long jump in 35th Junior Athletics Championship.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Blog Grid  -->
    
                        <!-- Start Blog Grid  -->
                        <div class="col-lg-4 col-md-6 col-12" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                            <div class="edu-blog blog-style-1">
                                <div class="inner">
                                    <div class="thumbnail">
                                        <a href="#">
                                            <img src="https://imgur.com/e15C2sy.jpg" style="height:350px;" alt="Blog Images">
                                        </a>
                                    </div>
                                    <div class="content position-top">
                                        <div class="read-more-btn">
                                            <a class="btn-icon-round" href="#"><i class="icon-4"></i></a>
                                        </div>
                                        <div class="category-wrap">
                                            <a href="#" class="blog-category">Sports</a>
                                        </div>
                                        <h5 class="title"><a href="#">Basketball team won the Gold Medal</a></h5>
                                        <ul class="blog-meta">
                                            <li><i class="icon-27"></i>17 Sept</li>
                                            <li><i class="icon-2"></i>Basketball</li>
                                        </ul>
                                        <p>Congratulations for your fabulous victory ! Congrats basketball champions  from Golden Harrier School on winning  Gold Medal in Junior  Basketball Championship held at Delhi.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Blog Grid  -->
                    </div>
                </div>
                <ul class="shape-group">
                    <li class="shape-1 scene">
                        <img data-depth="-1.4" src="assets/images/about/shape-02.png" alt="Shape">
                    </li>
                    <li class="shape-2 scene">
                        <span data-depth="2.5"></span>
                    </li>
                    <li class="shape-3 scene">
                        <img data-depth="-2.3" src="assets/images/counterup/shape-05.png" alt="Shape">
                    </li>
                </ul>
            </div>

@include('includes.footer')