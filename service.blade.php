@extends('frontend/master')
@section('index')
    
    <div class="container-fluid">
        
    <div class="row mt-3">
        <div class="col-sm-12">
             <h2 class="text-center">Services/ tests</h2>
        <p class="text-center">We’re here to help you. Get in touch with MKLab.</p>
        </div>
    </div>
     
          
          <div class="row mt-3">
              @foreach($tests as $test)
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="card test-card">
                            <div class="card-body">
                                <span class="test-name"><b>{{$test->name}}</b></span>  
                                <span> <i class="fa-solid fa-droplet text-danger "></i></span>
                                <span> <i class="fa-solid fa-droplet text-danger "></i></span>
                                <p class="test-desc">{{$test->description}}</p>
                              <a href=""><img src="{{url('admin/test/',$test->image)}}" width="90%" 
                              class="img-fluid" alt=""></a>
                              <p class="mt-3"><b>Price:</b> Rs {{ $test->price }}.00</p>
                          <p><b>Report Time:</b> {{ $test->report_time }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
         </div>
       
    </div>
@endsection