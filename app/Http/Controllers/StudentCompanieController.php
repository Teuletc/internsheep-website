<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentCompanieController extends Controller
{
    public function show() {
        return view('student-companie-page');
    }
}
