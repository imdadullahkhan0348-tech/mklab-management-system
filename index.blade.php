@extends('frontend/master')

@section('index')

  @if(Session::has('user'))
  <div class="alert alert-info ">{{Session()->get('user')}}</div>
  @endif
       <!-- hero is start  -->
       <section class="hero mt-2">

            <div class="row">
                @foreach($heros as $hero)
                <div class="col-sm-12 col-md-12 col-lg-12 hero">
                    <h1>{{$hero->title}}</h1>
                  <p>{{$hero->description}}.</p>
                  <a href="{{url('frontend/appointement')}}" c class="banner-btn mb-2 ">Book Appointment</a>
                 <button class="btn-secondary">view all</button>
                    
                </div>
                @endforeach
            </div>
   

       </section>
       <!-- hero is end -->
        <!-- Test Categories Section Start -->
  <section class="test-category mt-4">
    
        <h2 class="text-center mb-3"><b>Test Categories</b></h2>
        <p class="text-center text-muted">Choose from a wide range of diagnostic test groups</p>

        <div class="row mt-4">
            @foreach($categories as $category)
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-3">
                <div class="cat-box text-center p-3 shadow-sm">

                    <h5 class="mt-2">{{$category->name}}</h5>
                </div>
            </div>
            @endforeach
        </div>
 
   </section>
   <!-- Test Categories Section End -->
        <!-- test/reviews section area -->
         <section class="mt-3">
           
                <div class="row bg-light">
                    <div class="col-sm-12 col-lg-12 col-md-12 ">
                        <h2 class="text-center">Our Services / Tests</h2>
                        <p class="text-center">We provide multiple test to our patient which is listed below
                    </p>
                    </div>
                </div>
                <div class="row mt-3">
                       @foreach($tests as $test)
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="card test-card">
                            <div class="card-body">
                                <span class="test-name"><b>{{$test->name}}</b></span>  
                                
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
           
         </section>
        <!-- end test area -->
         <!-- About section -->

          <section class="mt-3">
                <div class="row bg-light ">
                    <div class="col-sm-12 col-lg-12 col-md-12">
                        <h2 class="text-center">About</h2>
                        <p class="text-center">why you choice us ? this is qustion  is about our socity </p>
                    </div>
                    
                </div>
                <div class="row mt-2">
                    @foreach($abouts as $about)
                    <div class="col-lg-6 col-md-6 col-sm-12 ">
                        <img src="{{url('admin/about/',$about->image)}}" class="about_image" width="" alt="">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 about-desc">
                        <h5>Why our lab</h5>
                        <p>our lab provide many facilty to th patient just like low price
                            , clean envornmtent , 100% correct anda also many other facilty
                        </p>
                        <h6> Highlights</h6>
                            <ol class="about-ol">
                                <li> Accurate Reports</li>
                                <li>Latest Machines</li>
                                <li>Experienced Staff</li>
                                <li>Home Sample Collection</li>
                            </ol>
                        <a href="" class="btn btn-info btn-sm view-test mt-2 "><b>Learn more about us</a>
                    </div>
                    @endforeach
                </div>
       
          </section>
          <!-- end about section -->
           <!-- testnomials area  -->
           
            <section class="testnomials">

                    <h2 class="section-title">Our patients says</h2>
                    <p class="section-sub ">Real feedback from people who used our services</p>
                
                    <div class="row">
                        @foreach($reviews as $review)
                        <div class="col-lg-4 col-md-6 col-12 col-sm-12">
                            <div class="card rev-test">
                                <img src="{{url('admin/review/',$review->image)}}" class="test-photo" alt="">
                                <h3 class="test-name">{{$review->name}}</h3>
                                <div class="test-stars text-center text-warning">{{$review->rating}}</div>
                                <p class="test-text">{{$review->comment}}</p>
                                <div class="test-meta">{{$review->test_name}}</div>
                            </div>
                        </div>
                        @endforeach
                       
                     
                    </div>
                    <div class="center">
                   <a href="testimonials.html" class="btn-view">Read More Reviews</a>
                   </div>

            </section>
            <!-- end testnomials area  -->
             <section>
                    <div class="row mt-4 mb-4 bg-light">
                        <div class="col-sm-12 col-lg-12 col-md-12 mb-3 text-center">
                            <h1>Need a Test</h1>
                            <p class="">book your test or call us or you contact us with whatsapp</p>
                            <a href="" class="btn btn-primary btn-lg">Call Now</a>
                            <a href="" class="btn btn-success btn-lg">WhatsApp</a>
                            <a href="" class="btn btn-pr btn-appon border-dark btn-lg">Appointment</a>
                        </div>
                    </div>
             </section>
             <!-- end testimonials -->

    
@endsection



