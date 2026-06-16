@extends('frontend/master')
@section('index')
    <div class="container-fluid">
              <!-- header section start -->
      
       <!-- header section end -->
        <div class="row">
            <div class="col-sm-12">
                <h2 class="text-center bg-light mt-3">Book Your Appointment</h2>
                <p class="text-center">You can book your appointment y the below form</p>

            </div>
        </div>
        @if(Session::has('appointement'))
        <div class="alert alert-warning">{{session()->get('appointement')}}</div>
        @endif
        <div class="row mb-3">
            <div class="col-sm-12">
                    <div class="row ">
                          <div class="col-sm-12 col-md-6 col-lg-10 col-6 offset-1">
                        <form class="contact-form" action="{{url('insert')}}" method="post" >
                            @csrf
                           
                        <div class="form-row mb-2">
                            <div class="col">
                              <label for="" class="cont-label  text-dark">patientname</label>
                              <input type="text" class="form-control cont-input" 
                             placeholder="Enter patient name" name="name">
                            </div>
                            <div class="col">
                               <label for="" class="cont-label text-dark">phone</label>
                               <input type="phone" class="form-control cont-input" 
                                placeholder="03xx-xxxxxxx" name="phone">
                            </div>
                        </div>
                        <div class="form-row mb-2">
                            <div class="col">
                                <label for="" class="cont-label text-dark">Prefferd date *</label>
                                <input type="date" class="form-control cont-input"   name="pr_date">
                            </div>
                            
                                <div class="col">
                                    <label for="" class="cont-label text-dark">preffered time</label>
                                    <input type="time" class="form-control cont-input" id="email"  name="pr_time">
                                </div>
                        </div>
                      
                        <div class="form-row mb-2">
                            <div class="col">
                                <label for="" class="cont-label text-dark">recivedtime</label>
                                <input type="time" class="form-control cont-input" id="email" name="recivedtime">
                            </div>
                            
                            <div class="col  mt-1">
                                <label class="cont-label text-dark">Address (For Home Sample)</label>
                                <textarea class="form-control cont-input" rows="1" cols="1" 
                                placeholder="Enter your address" name="address"></textarea>
                            </div>
                        </div>
                            <div class="form-row">
                             <div class="col">
                                <label class="cont-label text-dark">Select Test *</label>
                                @php
                                $tests= DB::table('tests')->get();
                                @endphp
                                <select class="form-control cont-input "  name="test_id[]" multiple required>
                                    <option value="">-- Select Test --</option>
                                    @foreach($tests as $test)
                                    <option value="{{$test->id}}" class="form-control">{{$test->name}}</option>
                                    @endforeach
                                </select>
                              </div>
                        </div>
                            <div class="col mt-3">
                                <button type="submit" class="col-sm-4 offset-3 btn btn-info" >submit</button>

                            </div>
                        </form>

                   
                    </div>
                </div>
            </div>
        </div>
         
    </div>
    
@endsection