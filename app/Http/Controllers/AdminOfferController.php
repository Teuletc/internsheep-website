<?php

namespace App\Http\Controllers;

use App\Models\Activite;
use App\Models\Addresse;
use App\Models\Companie;
use App\Models\Internship;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminOfferController extends Controller
{

    public function show() {

        $internships = Internship::all();
        $companies = Companie::all();
        $activities = Activite::all();
        $addresses = Addresse::all();
        return view('admin-offer', compact('companies', 'activities', 'addresses', 'internships'));

    }

}
