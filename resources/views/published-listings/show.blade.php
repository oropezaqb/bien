@extends('layouts.main')

@section('title', 'Bien Oropeza | Real Estate Consultant | Condominium | House and Lot | For Sale | For Rent')

@section('content')

             <!--########################## Blog Starts Here ############################# -->
         <div class="row vh-100">
            <div id="blog" class="service px-4 bg-white py-5">
                 <div class="titie-row row mb-3">
                    <h2 class="fw-bolder">Listing</h2>
                    <p>Give us a call if you have questions. Click <a href="tel:+639303262486">here.</a></p>
                </div>
                <div class="row mt-5">

                    <div class="col-lg-12 col-md-12 mb-4">
                       <div class="serv-cove rounded bg-white p-2">
                            <div class="p-2">
                                <h5 class="mt-3 fs-7 fw-bold">For {{ $listing->contract }}: {{ $listing->property_type }} ({{ $listing->property_description }})</h5>
                                <span class="fs-8">Available at: {{ $listing->available_at }}</span>
                                <span class="fs-8">Address: {{ $listing->address_number }}, {{ $listing->address_street }}, {{ $listing->address_barangay }}, {{ $listing->address_city }}, {{ $listing->address_province }}, {{ $listing->address_region }}</span>
                                <span class="fs-8">Total price / Monthly rate: {{ $listing->price }}</span>
                                <span class="fs-8">Reference no.: {{ $listing->id }}</span>
                                <span class="fs-8">Floor area: {{ $listing->floor_area }}</span>
                                <span class="fs-8">Lot area: {{ $listing->lot_area }}</span>
                                <span class="fs-8">Total price / Monthly rate: {{ $listing->price }}</span>
                                <h2>Contact info</h2>
                                <span class="fs-8">Agent: Bienvenido &quot;Bien&quot; Oropeza III</span>
                                <span class="fs-8">Phone number: <a href="tel:+639303262486">09303262486</a></span>
                                <span class="fs-8">Other phone number: <a href="tel:+639452947945">09452947945</a></span>
                                <span class="fs-8">Email: <a href="mailto:bien.oropeza@gmail.com">bien.oropeza@gmail.com</a></span>
                                <span class="fs-8">Address: 2990, Balabac St., Pinagkaisahan, Makati</span>
                            </div>
                       </div>
                    </div>

                </div>
            </div>
       </div>
@endsection
