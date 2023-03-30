<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Companie;
use App\Models\Internship;
use App\Models\Addresse;
use Illuminate\Support\Facades\DB;


class StudentCompanieController extends Controller
{
    public function showcompanie() {
        $companie = DB::table('companies')
            ->join('companiesrates', 'companiesrates.companies_id', '=', 'companies.id')

            ->join('companies_has_activities', 'activities_id', '=', 'companies.id')
            ->distinct()

            ->join('activities', 'activities_id', '=', 'activities.id')
            ->join('addresses', 'addresses.companies_id', '=', 'companies.id')

            ->select('companies.*', 'rate', 'activities.*', 'addresses.*')
            ->get();
        return view('student-companie-page',['companies' => $companie]);
    }
}
