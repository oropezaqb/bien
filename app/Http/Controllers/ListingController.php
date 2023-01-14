<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

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
            $listings = \DB::table('listings')->latest()->paginate(25);
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
        return view('listings.index', compact('listings', 'header'));
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
    public function store(Request $request)
    {
        $this->validate($request, [
                'filename' => 'required',
                'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:3048'
        ]);

        if($request->hasfile('filename'))
        {
            foreach($request->file('filename') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/image/', $name);  // your folder path
                $data[] = $name;
            }
        }
        
        $Upload_model = new FormMultipleUpload;
        $Upload_model->filename = json_encode($data);
        $Upload_model->save();
        return back()->with('success', 'Your images has been upload successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function show(Listing $listing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function edit(Listing $listing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Listing $listing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Listing $listing)
    {
        //
    }
}
