<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPiloteController extends Controller
{
    public function show() {
        return view('admin-pilote');
    }
}
