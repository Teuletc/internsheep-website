<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Internship;
use App\Models\Companie;


use Illuminate\Support\Facades\DB;


class Studentvoirinternships extends Controller
{
    public function showinternships($id) {
    
        $internship = Internship::find($id);
        $company = $internship->company;
        $address = $company->address;

        return view ('student-voir-internships',['internships' => $internship,'addresses'=> $address,'companie'=>$company]);
    }

    
}
