<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminStudentController extends Controller
{
    public function show() {
        return view('admin-student');
    }
}
