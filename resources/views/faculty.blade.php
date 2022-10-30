@include('includes.header')

<div class="edu-breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-inner">
            <div class="page-title">
                <h1 class="title">Our Faculty</h1>
            </div>
            <ul class="edu-breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="separator"><i class="icon-angle-right"></i></li>
                <li class="breadcrumb-item active" aria-current="page">Faculty</li>
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

<div class="container mt-5">

    <div class="row">
        <div class="col-md-12">
     
         <table class="table table-striped">
             <thead>
               <tr>
                 <th scope="col">S.No</th>
                 <th scope="col">Name</th>
                 <th scope="col">Designation</th>
                 <th scope="col">Qualification</th>
                 <th scope="col">Experience</th>
               </tr>
             </thead>
             <tbody>
            @if (count($faculty)>0)
            @foreach ($faculty as $faculties)
            <tr>
             <th scope="row">{{$faculties->id}}</th>
             <td>{{$faculties->name}}</td>
             
             <td>{{$faculties->designation}}</td>
             
             <td>{{$faculties->qualification}}</td>
             <td>{{$faculties->experience}}</td>
             
           </tr>
            @endforeach
            @else
            <td>No Faculty Found</td>
            @endif    
               
               
             </tbody>
           </table>
     
        </div>
     </div>

</div>



@include('includes.footer')