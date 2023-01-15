<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublishedListingController extends Controller
{
    public function index()
    {
        if (empty(request('address_city')))
        {
            $listings = \DB::table('listings')->where('publish', '1')->latest()->paginate(25);
        }
        else
        {
            $listings = \DB::table('listings')
                ->where('listings.address_city', 'like', '%' . request('address_city') . '%')
                ->latest()->paginate(25);
        }
        if (\Route::currentRouteName() === 'published-listings.index')
        {
            \Request::flash();
        }
        return view('published-listings.index', compact('listings'));
    }
}
