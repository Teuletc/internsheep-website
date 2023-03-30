<?php

namespace App\Http\Controllers;

use App\Models\Activite;
use App\Models\Addresse;
use App\Models\Companie;
use Illuminate\Http\Request;
use App\Models\Companiesrate;
use Illuminate\Support\Facades\DB;


class AdminCompanieController extends Controller
{
    

    public function show() {

        $companies = Companie::all();
        $activities = Activite::all();
        $addresses = Addresse::all();
        $companiesrates = Companiesrate::all();

        return view('admin-companie', compact('companies', 'activities', 'addresses','companiesrates'));

    }
}
