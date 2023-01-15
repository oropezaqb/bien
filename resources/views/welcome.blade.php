@extends('layouts.main')

@section('title', 'Bien Oropeza | Real Estate Consultant | Condominium | House and Lot | For Sale | For Rent')

@section('content')

            <!--########################## Profile Starts Here ############################# -->
            
            <div class="profile-head">
               <div class="row vh-100">
                   <div class="col-xl-6 text-center mx-auto align-self-center ">
                        <div class="imgcover mb-4">
                            <img src="assets/images/square.jpg" class="rounded-pill bg-white p-2 shadow" alt="">
                        </div>
                        <b class="fs-6">Hello! I am Bien Oropeza</b>
                        <h1 class="fw-bold mb-4 fs-1">Real Estate Consultant</h1>
                        <p>Enlist your property for sale/rent with us!</p>
                        <ul>
                            <li></li>
                        </ul>
                        <button class="btn btn-outline-primary fw-bolder fs-7 px-4 py-2 mt-3 rounded-pill" onclick="window.location.href='#contact';">Enlist Property</button>
                    </div>
               </div>
            </div>


            <!--########################## About Us Starts Here ############################# -->
            
            <div id="about" class="about px-4 bg-white py-5">
                <div class="titie-row row mb-3">
                    <h2 class="fw-bolder">About Me</h2>
                </div>
                <div class="row">
                    <div class="col-md-7">
                        <p><b>I am Bienvenido "Bien" Oropeza III</b></p>
                        <p class="pt-2 fs-6 text-justify">I am a Real Estate Consultant based in Makati, Philippines. I have been providing real estate services since year 2019 with HLURB Registration No. BRFO-A-07/19-474.</p>
                        
                        <h4 class=" fs-5 my-3 mt-4 fw-bolder">Real Estate Services</h4>
                        <p>We provide the following services:</p>

                        <div class="row skill-set">
                            <div class="col-md-6 py-3">
                               <h6 class="fw-bold">Property Consultation</h6>
                            </div>
                             <div class="col-md-6 py-3">
                                <h6 class="fw-bold">Property Pricing</h6>
                            </div>
                            <div class="col-md-6 py-3">
                                <h6 class="fw-bold">Property Selling</h6>
                            </div>

                            <div class="col-md-6 py-3">
                                <h6 class="fw-bold">Lease-Related Services</h6>
                            </div>

                            <div class="col-md-6 py-3">
                                <h6 class="fw-bold">Property Viewing</h6>
                            </div>

                            <div class="col-md-6 py-3">
                                <h6 class="fw-bold">Development Open Houses</h6>
                            </div>

                            <div class="col-md-6 py-3">
                                <h6 class="fw-bold">Property Management</h6>
                            </div>

                            <div class="col-md-6 py-3">
                                <h6 class="fw-bold">Renting-Out Properties</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <img src="assets/images/profile.jpg" alt="">
                    </div>
                </div>
            </div>

            <!--########################## Contact Us Starts Here ############################# -->
            
            <div class="service px-4 py-5">
                 <div class="titie-row row mb-3">
                    <h2 class="fw-bolder">Contact Us</h2>
                    <p>You may reach me thru the following channels:</p>
                </div>
                <div class="contact-row m-0 mt-5 row">
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="shadow-md row p-4 m-0 rounded bg-white">
                            <div class="col-md-3 text-center align-self-center">
                                <i class="bi fs-1 bi-headphones"></i>
                            </div>
                            <div class="col-md-9">
                                <h6 class="fs-7 fw-bolder">Phone</h6>
                                <ul>
                                    <li><a href="tel:+639303262486">+63 930 326 2486 (TNT)</a></li>
                                    <li><a href="tel:+639452947945">+63 945 294 7945 (Globe)</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="shadow-md row p-4 m-0 rounded bg-white">
                            <div class="col-md-3 text-center align-self-center">
                                <i class="bi fs-1 bi-envelope"></i>
                            </div>
                            <div class="col-md-9">
                                <h6 class="fs-7 fw-bolder">Email</h6>
                                <ul>
                                    <li><a href="mailto:bien.oropeza@gmail.com">bien.oropeza@gmail.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="shadow-md row p-4 m-0  rounded bg-white">
                            <div class="col-md-3 text-center align-self-center">
                                <i class="bi fs-1 bi-pin-map"></i>
                            </div>
                            <div class="col-md-9">
                                <h6 class="fs-7 fw-bolder">Address</h6>
                                <ul>
                                    <li>2990, Balabac St., Pinagkaisahan, Makati</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div id="contact" class="contact-row m-0 row">
                    <!--
                    <div class="col-md-6">
                        <div class="shadow-md p-4 rounded bg-white">
                            <h4 class="fs-6 fw-bolder mb-3">Contact Form</h4>
                            <form action="">
                                <div class="mb-3">
                                  <label for="exampleFormControlInput1" class="form-label fw-bolder fs-8">Email address</label>
                                  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Email Address">
                                </div>
                                 <div class="mb-3">
                                  <label for="exampleFormControlInput1" class="form-label fw-bolder fs-8">Subject</label>
                                  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Subject">
                                </div>
                                <div class="mb-3">
                                  <label for="exampleFormControlTextarea1" class="form-label fw-bolder fs-8">Message</label>
                                  <textarea class="form-control" placeholder="Enter Message" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                <div class="mb-3">
                                  <button class="btn btn-outline-primary fw-bolder fs-7 px-4 py-2 mt-3 rounded-pill">Send</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    -->
                    <div class="col-md-12">
                        <div class="shadow-md p-4 rounded bg-white">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.706524966507!2d121.03977591463115!3d14.558767789829126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c9057c705c6b%3A0x4520387e5c0036e4!2sCanopy%20Properties%20Inc.!5e0!3m2!1sen!2sph!4v1673369557561!5m2!1sen!2sph" style="width:100%" height="340" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
@endsection
