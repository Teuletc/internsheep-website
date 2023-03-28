<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Companie;
use App\Models\Intership;
use App\Models\Addresses;
use Illuminate\Support\Facades\DB;

class AdminOfferController extends Controller
{
    // public function show() {
    //     $companie = DB::table('companies')
    //     ->get();
    
    //     return view('admin-offer', ['companies' => $companie]);
    // }

    public function show() {
        $offre = DB::table('internships')

        ->join('companies', 'companies.id', '=', 'internships.companies_id')
        ->join('addresses', 'addresses.companies_id', '=', 'companies.id')
        ->select('internships.*', 'companies.*', 'addresses.*')
        ->orderBy('companies.id')
        ->get();

        return view('admin-offer', ['internships' => $offre]);
    }

}
