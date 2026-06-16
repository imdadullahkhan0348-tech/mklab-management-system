@extends('frontend/master')
@section('index')
    <div class="container-fluid">
          <!-- header section start -->
     
       <!-- header section end -->
        <div class="row">
            <div class="col-sm-12 mt-2">
                <h2 class="text-center bg-light">Meet Our team</h2>
                <p class="text-center">our team member is so experince </p>
            </div>
        </div>
          <div class="row mb-3">
            @foreach($teams as $team)
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="card ">
                    <img src="{{url('admin/team/',$team->image)}}" class="team_image rounded-circle img-fluid mt-3" alt="">
                    <h4 class="m-0">{{$team->name}}</h4>
                    <p class="m-0">{{$team->profession}}</p>
                    <small class="pb-3 m-0">{{$team->experince}}</small>
                </div>
            </div>
            @endforeach 
        </div>
    </div>
@endsection