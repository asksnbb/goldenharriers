@include('includes.header')

<div class="edu-breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-inner">
            <div class="page-title">
                <h1 class="title">Contact Us</h1>
            </div>
            <ul class="edu-breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="separator"><i class="icon-angle-right"></i></li>
                <li class="breadcrumb-item active" aria-current="page">COntact Us</li>
            </ul>
        </div>
    </div>
    <ul class="shape-group">
        <li class="shape-1">
            <span></span>
        </li>
        <li class="shape-2 scene" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;"><img data-depth="2" src="assets/images/about/shape-13.png" alt="shape" style="transform: translate3d(8.6px, -30.2px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;"></li>
        <li class="shape-3 scene" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;"><img data-depth="-2" src="assets/images/about/shape-15.png" alt="shape" style="transform: translate3d(-4.7px, 6.3px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;"></li>
        <li class="shape-4">
            <span></span>
        </li>
        <li class="shape-5 scene" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;"><img data-depth="2" src="assets/images/about/shape-07.png" alt="shape" style="transform: translate3d(5.7px, -31px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;"></li>
    </ul>
</div>


<section class="contact-us-area">
    <div class="container">
        <div class="row g-5">
            <div class="col-xl-4 col-lg-6">
                <div class="contact-us-info">
                    <h3 class="heading-title">We're Always Eager to Hear From You!</h3>
                    <ul class="address-list">
                        <li>
                            <h5 class="title">Address</h5>
                            <p>Golden Harrier International School, Jhundpur Road, Jakhauli, Haryana</p>
                        </li>
                        <li>
                            <h5 class="title">Email</h5>
                            <p><a href="mailto:contact@goldenharriers.com">contact@goldenharriers.com</a></p>
                        </li>
                        <li>
                            <h5 class="title">Phone</h5>
                            <p><a href="tel:+919896064802">+91 989 606 4802</a></p>
                            <p><a href="tel:+919896064902">+91 989 606 4902</a></p>
                        </li>
                    </ul>
                    <ul class="social-share">
                      
                        <li><a target="_blank" href="https://www.facebook.com/goldenharrier/"><i class="icon-facebook"></i></a></li>
                        <li><a target="_blank" href="https://twitter.com/goldenharrier?lang=en"><i class="icon-twitter"></i></a></li>
                        <li><a target="_blank" href="https://www.instagram.com/goldenharrier/?hl=en"><i class="icon-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="offset-xl-2 col-lg-6">
                <div class="contact-form form-style-2">
                    <div class="section-title">
                        <h4 class="title">Get In Touch</h4>
                        <p>Fill out this form</p>
                    </div>
                    <form class="rnt-contact-form rwt-dynamic-form" id="contact-form" method="POST" action="">
                        <div class="row row--10">
                            <div class="form-group col-12">
                                <input type="text" name="contact-name" id="contact-name" placeholder="Your name">
                            </div>
                            <div class="form-group col-12">
                                <input type="email" name="contact-email" id="contact-email" placeholder="Enter your email">
                            </div>
                            <div class="form-group col-12">
                                <input type="tel" name="contact-phone" id="contact-phone" placeholder="Phone number">
                            </div>
                            <div class="form-group col-12">
                                <textarea name="contact-message" id="contact-message" cols="30" rows="4" placeholder="Your message"></textarea>
                            </div>
                            <div class="form-group col-12">
                                <button class="rn-btn edu-btn btn-medium submit-btn" name="submit" type="submit">Submit Message <i class="icon-4"></i></button>
                            </div>
                        </div>
                    </form>
                    <ul class="shape-group">
                        <li class="shape-1 scene" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;"><img data-depth="1" src="assets/images/about/shape-13.png" alt="Shape" style="transform: translate3d(15.5px, -18.4px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;"></li>
                        <li class="shape-2 scene" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;"><img data-depth="-1" src="assets/images/counterup/shape-02.png" alt="Shape" style="transform: translate3d(-13.2px, 17.3px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>



<div class="google-map-area">
    <div class="mapouter">
        <div class="gmap_canvas">
            <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=Golden+Harrier+International+School,+Jhundpur+Road,+Jakhauli,+Haryana&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        </div>
    </div>
</div>



@include('includes.footer')