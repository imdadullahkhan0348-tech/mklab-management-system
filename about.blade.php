@extends('frontend/master')
@section('index')
    <div class="container-fluid">
  
        <div class="row mt-2">
            <div class="col-sm-12  col-md-12 col-lg-12 about_image">
                <h2 class="about_head" >About us</h2>
                <p class="text-light">
                    
                 our lab provide many facilty to th patient just like low price ,
                 clean envornmtent , 100% correct anda also many other facilty
                </p>
            </div>
        </div>
        <div class="row">
            @foreach($abouts as $about)
              <div class="col-lg-12 col-md-12 col-sm-12 about-desc">
                        <h5 class="mt-2">{{$about->title}}</h5>
                        <p>
                            {{$about->description}}
                        </p>
                        <h6> Highlights</h6>
                            <ol class="about-ol">
                                <li> Accurate Reports</li>
                                <li>Latest Machines</li>
                                <li>Experienced Staff</li>
                                <li>Home Sample Collection</li>
                            </ol>
                    </div>
                    @endforeach
        </div>
        <div class="row mt-3">
            <div class="col-sm-12 col-md-12 col-lg-12 col-12">
                <h2 class="text-center bg-light">Meet our team</h2>
                <p class="text-center">our team is profesional and skillfull staff which is well qualified</p>
                
            </div>

        </div>
       
        <div class="row mb-3">
            @foreach($teams as $team)
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="card ">
                    <img src="{{url('admin/team/',$team->image)}}" class="team_image rounded-circle img-fluid mt-3" alt="">
                    <h4 class="m-0">{{$team->name}}</h4>
                    <p class="m-0">{{$team->profession}}</p>
                    <small class="pb-3 m-0"> {{$team->experince}}.</small>
                </div>
            </div>
            @endforeach

        </div>
    </div>
   
@endsection