@include('includes.header')

<div class="edu-breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-inner">
            <div class="page-title">
                <h1 class="title">Educational Gallery</h1>
            </div>
            <ul class="edu-breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="separator"><i class="icon-angle-right"></i></li>
                <li class="breadcrumb-item active" aria-current="page">Educational Gallery</li>
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




<div class="edu-gallery-area edu-section-gap">
    <div class="container">
        <div id="masonry-gallery" class="gallery-grid-wrap" style="position: relative; height: 1259.83px;">
            <div id="animated-thumbnials" lg-uid="lg0">
               

                @if (count($educationalgallery)>0)
                    @foreach ($educationalgallery as $gallery)
                        <a href="{{$gallery->image}}" class="edu-popup-image edu-gallery-grid masonry-item" lg-event-uid="&amp;1" style="position: absolute; left: 0px; top: 0px;">
                            <div class="thumbnail">
                                <img src="{{$gallery->image}}" alt="{{$gallery->title}}">
                            </div>
                            <div class="zoom-icon">
                                <i class="icon-69"></i>
                            </div>
                        </a>
                    @endforeach
                @endif

            </div>
        </div>
    </div>
</div>







@include('includes.footer')