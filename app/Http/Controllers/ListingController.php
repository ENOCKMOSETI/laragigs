<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    // Get all Listings
    public function index() {
        return view('listings', [
            'listings' => Listing::all()
        ]);
    }

    // Get single Listing
    public function show(Listing $listing) {
        return view('listing', [
            'listing' => $listing
        ]);
    }
}
