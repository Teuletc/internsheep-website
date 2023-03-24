<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentOffersController extends Controller
{
    public function show() {
        return view('student-offers-page');
    }
}
