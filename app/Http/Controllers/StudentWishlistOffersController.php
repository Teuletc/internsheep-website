<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentWishlistOffersController extends Controller
{
    public function show() {
        return view('student-wishlist-offers');
    }
}
