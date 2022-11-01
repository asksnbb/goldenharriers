<!-- Start  Marquee Area  -->
    
<style type="text/css">
    .ticker{    display: flex;
flex-wrap: wrap;
width: 100%;
height: 50px;
margin: 0 auto;
position: fixed;
bottom: 0px;
right: 0px;
z-index: 20;} 

    .news{width: 100%;background: #cc4444;}
    .news-title{width: 180px;text-align: center;background: #c81c1c;position: absolute; z-index: 10;height: 50px;}
    .news-title:after{position: absolute;content: "";right: -39px;border-left: 20px solid #c81c1c;border-top: 28px solid transparent;border-right: 20px solid transparent;border-bottom: 21px solid transparent;top: 0px} 
    .news-title h5{font-size: 16px;margin: 7% 0;color: #fff;} 
    .news marquee{font-size: 18px;margin-top:9px}
    .news-content p{margin-right: 41px;display: inline;color: #fff;}

 </style>

 @php
     $announcement = App\Models\Announcement::all();
 @endphp

 @if (count($announcement) > 0)

 <div class="p-3 blog-masonry">

    <div class=""> 
       <div class="ticker"> 
           <div class="news-title">
               <h5>Announcements</h5>
           </div>
           <div class="news"> 
               <marquee class="news-content"> 
                   @foreach ($announcement as $announce)
                   <p>{{$announce->message}}</p>
                   @endforeach
                   
               </marquee> 
           </div> 
       </div> 
   </div>
    
</div>
     
 @endif

 

 <!-- Whatsapp -->


     <div class="whatsapp-icons">
        <a href="https://wa.me/919896064802?text=Hello%2C%20Can%20you%20help%20me%3F"><i class='bx bxl-whatsapp'></i></a>
     </div>

<!-- End Blog Area  -->
        <!--=====================================-->
        <!--=        Footer Area Start       	=-->
        <!--=====================================-->
        <!-- Start Footer Area  -->
        <footer class="edu-footer footer-lighten bg-image footer-style-1">
            <div class="footer-top">
                <div class="container">
                    <div class="row g-5">
                        <div class="col-lg-3 col-md-6">
                            <div class="edu-footer-widget">
                                <!-- <div class="logo">
                                    <a href="index.html">
                                        <img class="logo-light" src="assets/images/logo/logo-dark.png" alt="Corporate Logo">
                                        <img class="logo-dark" src="assets/images/logo/logo-white.png" alt="Corporate Logo">
                                    </a>
                                </div> -->
                                <p class="description">Golden Harrier School is Administrated By the Lal Chand Educational Trust.</p>
                                <div class="widget-information">
                                    <ul class="information-list">
                                        <li><span>Add:</span>Jhundpur Road, Jakholi, Sonepat, Sonipat, Haryana</li>
                                        <li><span>Call:</span><a href="tel:+919896064802">+91 98960 64802</a></li>
                                        <li><span>Call:</span><a href="tel:+919896064902">+91 98960 64902</a></li>
                                        <li><span>Email:</span><a href="mailto:contact@goldenharriers.com" target="_blank">contact@goldenharriers.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="edu-footer-widget explore-widget">
                                <h4 class="widget-title">Official</h4>
                                <div class="inner">
                                    <ul class="footer-link link-hover">
                                        <li><a href="/circulars">Circulars</a></li>
                                        <li><a href="/about-school">About School</a></li>
                                        <li><a href="/school-rules">School Rules</a></li>
                                        <li><a href="/annual-report">Annual Reports</a></li>
                                        <li><a href="/careers">Careers</a></li>
                                        <li><a target="_blank" href="http://cbseacademic.nic.in/curriculum_2022.html">Curriculam</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6">
                            <div class="edu-footer-widget quick-link-widget">
                                <h4 class="widget-title">Important Links</h4>
                                <div class="inner">
                                    <ul class="footer-link link-hover">
                                        <li><a href="/reach-us">Contact Us</a></li>
                                        <li><a href="/admission-process">Admission Process</a></li>
                                        <li><a href="/fee-schedule">Fee Schedule</a></li>
                                        <li><a href="/mdisclosure">Mandatory Disclosure</a></li>
                                        <li><a href="/student-details">Student Details</a></li>
                                        <li><a href="/downloads">Downloads</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="edu-footer-widget">
                                <h4 class="widget-title">Find us on Google map</h4>
                                <div class="inner">
                                    <iframe width="364" height="225" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=364&amp;height=225&amp;hl=en&amp;q=Golden%20Harrier%20International%20School,%20Jhundpur%20Road,%20Jakhauli,%20Haryana%20Sonepat+(Golden%20Harrier%20School)&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>

                                    {{-- <p class="description">If you have any questions about the services we provide simply use the form below. We try and respond to all queries and comments within 24 hours.</p>
                                    <div class="input-group footer-subscription-form">
                                        <input type="email" class="form-control" placeholder="Your email">
                                        <button class="edu-btn btn-medium" type="button">Email Us <i class="icon-4"></i></button>
                                    </div> --}}
                                    {{-- <ul class="social-share icon-transparent">
                                        <li><a target="__blank" href="https://www.facebook.com/goldenharrier/" class="color-fb"><i class="icon-facebook"></i></a></li>
                                        <li><a target="__blank" href="https://www.instagram.com/goldenharrier/?hl=en" class="color-ig"><i class="icon-instagram"></i></a></li>
                                        <li><a target="__blank" href="https://twitter.com/goldenharrier?lang=en" class="color-twitter"><i class="icon-twitter"></i></a></li>
                                        <li><a target="__blank" href="https://www.youtube.com/c/GoldenHarrierSchool" class="color-yt"><i class="icon-youtube"></i></a></li>
                                    </ul> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <div class="edu-footer-widget">
                            <div class="inner">
                                <ul class="social-share">
                                    <li><a target="__blank" href="https://www.facebook.com/goldenharrier/" class="color-fb"><i class="icon-facebook"></i></a></li>
                                    <li><a target="__blank" href="https://www.instagram.com/goldenharrier/?hl=en" class="color-ig"><i class="icon-instagram"></i></a></li>
                                    <li><a target="__blank" href="https://twitter.com/goldenharrier?lang=en" class="color-twitter"><i class="icon-twitter"></i></a></li>
                                    <li><a target="__blank" href="https://www.youtube.com/c/GoldenHarrierSchool" class="color-yt"><i class="icon-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="copyright-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="inner text-center">
                                <p>Copyright 2022 | All Rights Reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer Area  -->



    </div>

    <div class="rn-progress-parent">
        <svg class="rn-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- JS
	============================================ -->
    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr.min.js"></script>
    <!-- Jquery Js -->
    <script src="assets/js/vendor/jquery.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/vendor/sal.min.js"></script>
    <script src="assets/js/vendor/backtotop.min.js"></script>
    <script src="assets/js/vendor/magnifypopup.min.js"></script>
    <script src="assets/js/vendor/jquery.countdown.min.js"></script>
    <script src="assets/js/vendor/odometer.min.js"></script>
    <script src="assets/js/vendor/isotop.min.js"></script>
    <script src="assets/js/vendor/imageloaded.min.js"></script>
    <script src="assets/js/vendor/lightbox.min.js"></script>
    <script src="assets/js/vendor/paralax.min.js"></script>
    <script src="assets/js/vendor/paralax-scroll.min.js"></script>
    <script src="assets/js/vendor/jquery-ui.min.js"></script>
    <script src="assets/js/vendor/swiper-bundle.min.js"></script>
    <script src="assets/js/vendor/svg-inject.min.js"></script>
    <script src="assets/js/vendor/vivus.min.js"></script>
    <script src="assets/js/vendor/tipped.min.js"></script>
    <script src="assets/js/vendor/smooth-scroll.min.js"></script>
    <script src="assets/js/vendor/isInViewport.jquery.min.js"></script>

    <!-- Site Scripts -->
    <script src="assets/js/app.js"></script>
</body>

</html>