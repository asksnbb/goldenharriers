@include('includes.header')

 <!--=====================================-->
        <!--=       Hero Banner Area Start      =-->
        <!--=====================================-->

        @php
        $banners = App\Models\Banner::all();
        $toppers = App\Models\Topper::all();
        @endphp

        @if (count($banners)>0)
         
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">

                @foreach ($banners as $key =>$banner)
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$key}}" class="{{$key == 0 ? 'active' : ''}}" aria-current="true" aria-label="Slide 1"></button>  
                @endforeach
            </div>
            <div class="carousel-inner">
                @foreach ($banners as $key =>$banner)
                    <div class="carousel-item {{$key == 0 ? 'active' : ''}}">
                        <img src="{{$banner->image}}" class="d-block w-100 img-fluid" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>{{$banner->heading}}</h5>
                            <p>{{$banner->description}}</p>
                          </div>
                    </div>
                @endforeach
            
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

        @endif  
            <!--=====================================-->
            <!--=       Features Area Start      =-->
            <!--=====================================-->
            <!-- Start Categories Area  -->
            <div class="features-area-2 d-none d-sm-none d-md-block">
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
                                    <a href="#">
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
                                    <a href="#">
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
                                    <a href="#">
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
                                    <a href="#">
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
                                    <a href="#">
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
                                    <a href="#">
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
                                    <a href="#">
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
                                    <a href="#">
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
                                    <a href="#">
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
                                <img class="main-img-1" src="https://i.imgur.com/vfB2p9o.jpg" alt="Award Image Golden harrier School"/>
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
                                                <p>Hello, I am Tannu from class XII C. Golden Harrier School is providing the best quality education to us. Faculties are very supportive and caring. They teaches us with fact and totally conceptual based learning.Thanks to teachers for guidance.</p>
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
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Testimonial Area  -->
    
            <!--Gallary Art Start-->
                <div class="edu-gallery-area edu-section-gap" style="padding: 33px 0 45px;
                background-color:#f0f4f5;">
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
    
    
                                <a href="#" class="edu-popup-image edu-gallery-grid isotope-item education" lg-event-uid="&amp;1" style="position: absolute; left: 0%; top: 0px;">
                                    <div class="thumbnail">
                                        <img src="https://i.imgur.com/SrgX28Y.jpg" alt="Gallery Image">
                                    </div>
                                    <div class="zoom-icon">
                                        <i class="icon-69"></i>
                                    </div>
                                </a>
    
    
                                <a href="#" class="edu-popup-image edu-gallery-grid isotope-item marketing" lg-event-uid="&amp;2" style="position: absolute; left: 43.1667%; top: 0px;">
                                    <div class="thumbnail">
                                        <img src="https://i.imgur.com/0JJkadM.jpg" alt="Gallery Image">
                                    </div>
                                    <div class="zoom-icon">
                                        <i class="icon-69"></i>
                                    </div>
                                </a>
    
    
                                <a href="#" class="edu-popup-image edu-gallery-grid isotope-item education health" lg-event-uid="&amp;3" style="position: absolute; left: 0%; top: 426px;">
                                    <div class="thumbnail">
                                        <img src="https://i.imgur.com/L4owvEc.jpg" alt="Gallery Image">
                                    </div>
                                    <div class="zoom-icon">
                                        <i class="icon-69"></i>
                                    </div>
                                </a>
    
    
                                <a href="#" class="edu-popup-image edu-gallery-grid isotope-item marketing" lg-event-uid="&amp;4" style="position: absolute; left: 43.1667%; top: 426px;">
                                    <div class="thumbnail">
                                        <img src="https://i.imgur.com/RGA96SP.jpg" alt="Gallery Image">
                                    </div>
                                    <div class="zoom-icon">
                                        <i class="icon-69"></i>
                                    </div>
                                </a>
    
    
                                <a href="#" class="edu-popup-image edu-gallery-grid isotope-item education" lg-event-uid="&amp;5" style="position: absolute; left: 0%; top: 852px;">
                                    <div class="thumbnail">
                                        <img src="https://i.imgur.com/fbbQG1T.jpg" alt="Gallery Image">
                                    </div>
                                    <div class="zoom-icon">
                                        <i class="icon-69"></i>
                                    </div>
                                </a>
    
    
                                <a href="#" class="edu-popup-image edu-gallery-grid isotope-item health" lg-event-uid="&amp;6" style="position: absolute; left: 43.1667%; top: 852px;">
                                    <div class="thumbnail">
                                        <img src="https://imgur.com/VvI2tUQ.jpg" alt="Gallery Image">
                                    </div>
                                    <div class="zoom-icon">
                                        <i class="icon-69"></i>
                                    </div>
                                </a>
    
    
                                <a href="#" class="edu-popup-image edu-gallery-grid isotope-item development" lg-event-uid="&amp;7" style="position: absolute; left: 0%; top: 1278px;">
                                    <div class="thumbnail">
                                        <img src="https://i.imgur.com/1qNVnVM.jpg" alt="Gallery Image">
                                    </div>
                                    <div class="zoom-icon">
                                        <i class="icon-69"></i>
                                    </div>
                                </a>
    
    
                                <a href="#" class="edu-popup-image edu-gallery-grid isotope-item marketing health" lg-event-uid="&amp;8" style="position: absolute; left: 43.1667%; top: 1278px;">
                                    <div class="thumbnail">
                                        <img src="https://i.imgur.com/0IGNqMB.jpg" alt="Gallery Image">
                                    </div>
                                    <div class="zoom-icon">
                                        <i class="icon-69"></i>
                                    </div>
                                </a>
    
    
                                <a href="#" class="edu-popup-image edu-gallery-grid isotope-item development" lg-event-uid="&amp;9" style="position: absolute; left: 0%; top: 1704px;">
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
        <!--=       Testimonial Area Start      =-->
        <!--=====================================-->
        <!-- Start Testimonial Area  -->
        @if (count($toppers)>2)
            
        <div class="testimonial-area-8 section-gap-equal" style="padding: 35px 0 !important;">
            <div class="container edublink-animated-shape">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <span class="pre-title">Toppers</span>
                            <h2 class="title">School Toppers  <br> 2021 - 2022</h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-activation swiper">
                    <div class="swiper-wrapper">
                        
                    @foreach ($toppers as $topper)
                       
                        <div class="swiper-slide">
                            <div class="testimonial-slide">
                                <div class="content">
                                    <div class="author-info">
                                        <div class="thumb">
                                            <img src="{{$topper->image}}" alt="{{$topper->name}}">
                                        </div>
                                    </div>
                                    <div class="info">
                                        <h5 class="title" style="font-size: 19px;">{{$topper->name}}</h5>
                                        <div class="d-flex flex-column">
                                            <span class="subtitle">Class {{$topper->class}}</span>
                                        <span>Percentage - {{$topper->percentage}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    @endforeach     

                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <ul class="shape-group">
                <li class="shape-3" data-sal-delay="200" data-sal="fade" data-sal-duration="1000">
                    <img class="d-block-shape-light" data-depth="2" src="assets/images/others/map-shape-3.png" alt="Shape">
                    <img class="d-none-shape-dark" data-depth="2" src="assets/images/others/dark-map-2-shape-3.png" alt="Shape">
                </li>
            </ul>
        </div>

        @endif
        <!-- End Testimonial Area  -->
        <!--=====================================-->
    
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
                                            <a href="#">
                                                <img src="{{$teacher->image}}" class="img-fluid" style="height: 350px;" alt="team images">
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
                                            <img src="https://i.imgur.com/jXcOG2W.jpg" alt="Faq Images">
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