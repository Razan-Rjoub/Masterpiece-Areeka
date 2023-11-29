@extends('layout.master')
@section('title', 'About us')

@section('content')
    <link rel="stylesheet" href="{{asset('Web/About.css')}}">
    <link rel="stylesheet" href="{{asset('Web/tiny-slider.css')}}">
  


    <br><br>
    <div class="why-choose-section mt-5">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6">
                    <h2 class="section-title">Why Choose Us</h2>
                   

                    <div class="row my-5">
                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <img src="{{asset('Web/images/truck.svg')}}" alt="Image" class="imf-fluid">
                                </div>
                                <h3>Fast &amp; Free Shipping</h3>
                               <p>Enjoy shopping with our exclusive offer free shipping on all stores in
                        purchase
                        over <span style="font-weight: bold; color: #ffc713;">500JD</span>,
                        so hurry to take advantage of the offer</p> 
                            </div>
                        </div>

                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <img src="Web/images/bag.svg" alt="Image" class="imf-fluid">
                                </div>
                                <h3>Easy to Shop</h3>
                                <p>ensures that finding and purchasing your desired items is effortless and enjoyable</p>
                            </div>
                        </div>

                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <img src="Web/images/support.svg" alt="Image" class="imf-fluid">
                                </div>
                                <h3>24/7 Support</h3>
                                <p class="p-why">3 years warranty
                     We really believe in our stores,
                        so we provide a guarantee time
                        of 3 years for you our customers</p>
                            </div>
                        </div>

                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <img src="Web/images/return.svg" alt="Image" class="imf-fluid">
                                </div>
                                <h3>Hassle Free Returns</h3>
                                <p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="img-wrap">
                        <img src="Web/images/why-choose-us-img.jpg" alt="Image" class="img-fluid">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Why Choose Us Section -->

    <!-- Start Team Section -->
    <div class="untree_co-section">
        <div class="container">

            <div class="row mb-5">
               <center> <div class="col-lg-12 mx-auto text-center">
                  
                    <h2 class="">Our Team</h2>  
                </div></center>
            </div>

            <div class="row">
<center>
              <!-- Start Column 1 -->
                <div class="col-12 col-md-6 col-lg-4 mb-5 mb-md-0 ">
                    <img src="../images/FZ2_8041.JPG" class="img-fluid mb-5" style="border-radius: 8px;"></div>
                    <h3 clas><span class="">Razan</span> AL-Rjoub</h3>
        <span class="d-block position mb-4">CEO, Founder</span>
        
                 
        

                

            </div></center>
        </div>
    </div>
   @endsection