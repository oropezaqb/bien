@extends('layouts.main')

@section('title', 'Bien Oropeza | Real Estate Consultant | Condominium | House and Lot | For Sale | For Rent')

@section('content')

             <!--########################## Blog Starts Here ############################# -->
         <div class="row vh-100">
            <div id="blog" class="service px-4 bg-white py-5">
                 <div class="titie-row row mb-3">
                    <h2 class="fw-bolder">Listings</h2>
                    <p>Give us a call if you have questions. Click <a href="tel:+639303262486">here.</a></p>
                </div>
                <div class="row mt-5">

                  @forelse ($listings as $listing)
                    <div class="col-lg-4 col-md-6 mb-4">
                       <div class="serv-cove rounded bg-white p-2">
                            <?php
                                $pictures = json_decode($listing->photos);
                            ?>
                            <img src="{{ asset('/images/'. $pictures[0]) }}" alt="">
                            <div class="p-2">
                                <h5 class="mt-3 fs-7 fw-bold"><a href="/published-listings/{{ $listing->id }}">For {{ $listing->contract }}: {{ $listing->property_type }} ({{ $listing->property_description }})</a></h5>
                                <span class="fs-8">{{ $listing->available_at }}</span>
                                <span class="float-end fs-8"><i class="bi bi-person"></i> {{ $listing->address_barangay }}, {{ $listing->address_city }}</span>
                            </div>
                       </div>
                    </div>
                  @empty
                    <p>No published listings yet.</p>
                  @endforelse

                </div>
            </div>
       </div>
@endsection
