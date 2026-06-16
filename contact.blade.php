@extends('frontend/master')
@section('index')
    <div class="container-fluid">
         <!-- header section start -->
     
       <!-- header section end -->


<!-- ====== PAGE HEADER ====== -->
<section class="py-3 bg-light text-center">
    <div class="container">
        <h2 class="fw-bold">Contact Us</h2>
        <p class="text-muted">We’re here to help you. Get in touch with MKLab.</p>
    </div>
</section>

<!-- ====== CONTACT SECTION ====== -->
<section class="py-5">
    <div class="container">
        <div class="row g-4">

            <!-- Contact Form -->
            <div class="col-md-7">
                <div class="p-4 shadow rounded bg-white">
                    <h4 class="mb-3">Send us a Message</h4>
                    
                    <form action="{{url('admin/email/insert')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Full Name</label>
                            <input type="text" class="form-control" placeholder="Enter your name" name="fullname">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email Address</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter email">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Phone Number</label>
                            <input type="text" class="form-control" name="phone" placeholder="03xx-xxxxxxx">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Subject</label>
                            <input type="text" class="form-control" name="subject" placeholder="Subject">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Message</label>
                            <textarea class="form-control" name="message" rows="5" placeholder="Write your message"></textarea>
                        </div>

                        <button class="btn btn-primary px-4">Send Message</button>
                    </form>
                </div>
            </div>

            <!-- Info Side -->
            <div class="col-md-5">
                <div class="p-4 shadow rounded bg-white">

                    <h4 class="mb-3">Contact Information</h4>

                    <p><strong>Address:</strong><br>
                        MKLab Diagnostic Center, Main Road, Your City
                    </p>

                    <p><strong>Phone:</strong><br>
                        03xx-xxxxxxx (Call / WhatsApp)
                    </p>

                    <p><strong>Email:</strong><br>
                        support@mklab.com
                    </p>

                    <p><strong>Opening Hours:</strong><br>
                        Mon–Sat: 8:00 AM – 10:00 PM<br>
                        Sunday: 9:00 AM – 6:00 PM
                    </p>

                    <hr>

                    <!-- Emergency Box -->
                    <div class="p-3 border rounded bg-light">
                        <strong>📞 Emergency Contact:</strong><br>
                        03xx-xxxxxxx
                    </div>

                    <hr>

                    <!-- Social Media -->
                    <h5>Follow Us:</h5>
                    <a href="#" class="d-block text-primary">Facebook</a>
                    <a href="#" class="d-block text-danger">Instagram</a>
                    <a href="#" class="d-block text-success">WhatsApp</a>

                </div>
            </div>

        </div>
    </div>
</section>

<!-- ====== MAP SECTION ====== -->

      
        
 </div>
@endsection