<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use App\Http\Requests\StoreListing;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class ListingController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('web');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (empty(request('development')))
        {
            $listings = \DB::table('listings')->where('user_id', auth()->user()->id)->latest()->paginate(25);
            $forApprovals = \DB::table('listings')->where('publish', '0')->latest()->paginate(25);
        }
        else
        {
            $bills = \DB::table('listings')
                ->where('listings.development', 'like', '%' . request('development') . '%')
                ->latest()->paginate(25);
        }
        $header = "Listings";
        if (\Route::currentRouteName() === 'listings.index')
        {
            \Request::flash();
        }
        return view('listings.index', compact('listings', 'header', 'forApprovals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $header = "Add a New Listing";
        $listings = Listing::latest()->get();
        return view('listings.create', compact('header', 'listings'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreListing $request)
    {
        try {
            \DB::transaction(function () use ($request) {
                if($request->hasfile('photos'))
                {
                    foreach($request->file('photos') as $image)
                    {
                        //$name=$image->getClientOriginalName();
                        $image->store('images');
                        $data[] = $image->hashName();
                    }
                }
                $listing = new Listing([
                    'contract' => request('contract'),
                    'property_type' => request('property_type'),
                    'property_description' => request('property_description'),
                    'floor_area' => request('floor_area'),
                    'lot_area' => request('lot_area'),
                    'price' => request('price'),
                    'address_region' => request('address_region'),
                    'address_province' => request('address_province'),
                    'address_city' => request('address_city'),
                    'address_barangay' => request('address_barangay'),
                    'address_street' => request('address_street'),
                    'address_number' => request('address_number'),
                    'address_floor' => request('address_floor'),
                    'address_unit' => request('address_unit'),
                    'available_at' => request('available_at'),
                    'owner_name' => request('owner_name'),
                    'phone_number' => request('phone_number'),
                    'phone_number2' => request('phone_number2'),
                    'email' => request('email'),
                    'address' => request('address'),
                    'photos' => json_encode($data),
                    'user_id' => request('user_id'),
                    'publish' => '0',
                ]);
                $listing->save();
            });
            return redirect(route('listings.index'))->with('success', 'Your listing has been recorded successfully');;
        } catch (\Exception $e) {
            return back()->with('status', $this->translateError($e))->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function show(Listing $listing)
    {
        $header = "Listing Details";
//dd(json_decode($listing->photos));
        return view('listings.show',
            compact('listing', 'header'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function edit(Listing $listing)
    {
        $header = "Edit Listing";
        return view('listings.edit',
            compact('listing', 'header'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function update(StoreListing $request, Listing $listing)
    {
        try {
            \DB::transaction(function () use ($request, $listing) {
                if($request->hasfile('photos'))
                {
                    foreach($request->file('photos') as $image)
                    {
                        //$name=$image->getClientOriginalName();
                        $image->store('images');
                        $data[] = $image->hashName();
                    }
                }
                $pictures = json_decode($listing->photos);
                $listing->update([
                    'contract' => request('contract'),
                    'property_type' => request('property_type'),
                    'property_description' => request('property_description'),
                    'floor_area' => request('floor_area'),
                    'lot_area' => request('lot_area'),
                    'price' => request('price'),
                    'address_region' => request('address_region'),
                    'address_province' => request('address_province'),
                    'address_city' => request('address_city'),
                    'address_barangay' => request('address_barangay'),
                    'address_street' => request('address_street'),
                    'address_number' => request('address_number'),
                    'address_floor' => request('address_floor'),
                    'address_unit' => request('address_unit'),
                    'available_at' => request('available_at'),
                    'owner_name' => request('owner_name'),
                    'phone_number' => request('phone_number'),
                    'phone_number2' => request('phone_number2'),
                    'email' => request('email'),
                    'address' => request('address'),
                    'photos' => json_encode($data),
                    'user_id' => request('user_id'),
                    'publish' => '0',
                ]);
                $arrlength = count($pictures);
                for($x = 0; $x < $arrlength; $x++) {
                    if(\File::exists(public_path('images/'. $pictures[$x]))){
                        \File::delete(public_path('images/'. $pictures[$x]));
                    }
                }
            });
            return redirect(route('listings.show', [$listing]))->with('status', 'Listing updated!');
        } catch (\Exception $e) {
            return back()->with('status', $this->translateError($e))->withInput();
        }
    }

    public function publish(Request $request)
    {
        try {
            \DB::transaction(function () use ($request) {
                \DB::table('listings')->where('id', $request->listing_id)->update(['publish' => '1']);
            });
            return redirect(route('listings.index'))->with('status', 'Listing published!');
        } catch (\Exception $e) {
            return back()->with('status', $this->translateError($e))->withInput();
        }
    }

    public function unpublish(Request $request)
    {
        try {
            \DB::transaction(function () use ($request) {
                \DB::table('listings')->where('id', $request->listing_id)->update(['publish' => '0']);
            });
            return redirect(route('listings.index'))->with('status', 'Listing unpublished!');
        } catch (\Exception $e) {
            return back()->with('status', $this->translateError($e))->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Listing $listing)
    {
            try {
                $pictures = json_decode($listing->photos);
                \DB::transaction(function () use ($listing) {
                    $listing->delete();
                });
                $arrlength = count($pictures);
                for($x = 0; $x < $arrlength; $x++) {
                    if(\File::exists(public_path('images/'. $pictures[$x]))){
                        \File::delete(public_path('images/'. $pictures[$x]));
                    }
                }
                return redirect(route('listings.index'));
            } catch (\Exception $e) {
                return back()->with('status', $this->translateError($e))->withInput();
            }
    }

    public function translateError($e)
    {
        switch ($e->getCode()) {
            //case '23000':
                //return "Bill number for this supplier is already recorded.";
        }
        return $e->getMessage();
    }

}
