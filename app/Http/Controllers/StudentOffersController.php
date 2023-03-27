<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Companie;
use App\Models\Internship;

use App\Models\Addresses;
use Illuminate\Support\Facades\DB;


class StudentOffersController extends Controller
{
    public function show() {
            $offre = DB::table('internships')
    
            ->join('companies', 'companies.id', '=', 'internships.companies_id')
            ->join('addresses', 'addresses.companies_id', '=', 'companies.id')
            ->select('internships.*', 'companies.*', 'addresses.*')
            ->orderBydesc('internships.id')
            ->get();

        return view('student-offers-page', ['internships' => $offre]);
    }
}
