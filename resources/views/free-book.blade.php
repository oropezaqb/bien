@extends('layouts.main')

@section('title', 'Bien Oropeza | Oropeza Business Process Outsourcing Services | Accounting | Tax | Payroll')

@section('content')

            <!--########################## About Us Starts Here ############################# -->

            <div id="about" class="about px-4 bg-white py-5">
                <div class="titie-row row mb-3">
                    <h2 class="fw-bolder">Free Book</h2>
                </div>
                <div class="row">
                    <div class="col-md-7">
                        <p>Live Your Days Stress-Free from Taxes</p><br>
                        <p>This book, "Bakit Ako Magbabayad ng Tax?: 10 Taxes due from Businesses and Entrepreneurs in the Philippines and 15 Other Tax Compliance Requirements," talks about Risk Management for Businesses and has a bonus chapter entitled "5 Things to do When You Receive a Letter from BIR Stating the Possibility of Paying Penalties."</p><br>
                        <p>By reading the book, I do hope that you acquire these learnings:</p>
                        <p>- How to handle tax matters seamlessly, so that you can focus more on having a sustainable business.</p>
                        <p>- Relate more to your bookkeepers, accountants and tax consultants, if there is any.</p>
                        <p>- Learn new things when it comes to tax compliance.</p>
                        <p>- Defend your businesses against the Bureau of Internal Revenue (BIR) who can be very aggressive in collecting taxes.</p>
                        <p>- Feel Stress-Free regarding tax compliance.</p><br>
                        <p>Get this book for free by providing your email address below:</p>
                        <div class="shadow-md p-4 rounded bg-white">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form enctype="multipart/form-data" method="POST" action="/free-book/get">
                                @csrf
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                       </ul>
                                    </div>
                                @endif
                                <div class="mb-3">
                                  <label for="exampleFormControlInput1" class="form-label fw-bolder fs-8">Name</label>
                                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
                                </div>
                                 <div class="mb-3">
                                  <label for="exampleFormControlInput1" class="form-label fw-bolder fs-8">Email Address</label>
                                  <input type="email" class="form-control" id="email_address" name="email_address" placeholder="Enter Email Address">
                                </div>
                                <button class="btn btn-outline-primary fw-bolder fs-7 px-4 py-2 mt-3 rounded-pill">Get Free Book</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <img src="assets/images/book.jpg" alt="">
                    </div>
                </div>
            </div>

@endsection
