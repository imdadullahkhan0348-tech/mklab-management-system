@extends('frontend/master')
@section('index')
    <div class="container-fluid ">
           <!-- header section start -->
       
       <!-- header section end -->

        <div class="row mt-3 mb-3 align-items-stretch">
            <div class="col-sm-4 offset-1">
                <img src="assets/image/blood.jpg" alt="" class="img-fluid  h-100 w-100">
            </div>
          
            <div class="col-sm-6 bg-light">
                <h6 class="testdethead mt-2">Blood test</h6>
                <p >“Measures RBC, WBC, platelets in blood.”</p>
                <h4 class="testdethead">purpose</h4>
                <p >Infection check, anemia, overall health monitoring</p>
                <h4 class="testdethead">instruction</h4>
                <p >No fasting needed” or “Fasting 8 hours before”</p>
                <h4 class="testdethead">Procdure</h4>
                <p>Blood sample from vein → Lab analysis</p>
                <h4 class="testdethead">sample Reports</h4>
                <p>RBC: 4.5–5.5 million/µL, WBC: 4,000–11,000/µL</p>
                <h4 class="testdethead">Who should take it</h4>
                <p>this is for adult man , woman and old people</p>
                <button type="button" class="btn btn-info">Book appointment</button>
            </div>
        </div>
        
    </div>
@endsection