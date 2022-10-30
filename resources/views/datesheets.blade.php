@include('includes.header')

<div class="edu-breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-inner">
            <div class="page-title">
                <h1 class="title">Datesheets</h1>
            </div>
            <ul class="edu-breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="separator"><i class="icon-angle-right"></i></li>
                <li class="breadcrumb-item active" aria-current="page">Datesheets</li>
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


<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="table-responsive mt-5">
                <h4 class="font-weight-bold text-center font-weight-bold">Classwise datesheets</h4><br>
                <table class="table table-primary table-bordered" align="center">
                    <tbody>
                    <tr style="font-style:bold; color:rgb(11, 4, 75);">
                        <th class="font-weight-bold">S.No</th>
                        <th class="font-weight-bold">Date</th>
                        <th class="font-weight-bold">Class</th>
                        <th class="font-weight-bold">Link</th>
                    </tr>

                    @if (count($datesheets) > 0)
                        @foreach ($datesheets as $datesheet)
                        <tr>
                            <td>{{$datesheet->id}}</td>
                            <td>{{date('d-m-Y', strtotime($datesheet->created_at))}}</td>
                            <td>{{$datesheet->class}}</td>
                            <td><a target="_blank" style="color:red;" href="{{$datesheet->downloadlink}}">download</a></td>
                        </tr>
                        @endforeach
                    @else
                        
                    @endif
                    
                     
                    
                </tbody></table>
          
                
            </div>
     </div>
    </div>
</div>



@include('includes.footer')