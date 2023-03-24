<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminOfferController extends Controller
{
    public function show() {
        return view('admin-offer');
    }
}
