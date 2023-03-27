<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Companie;


use Illuminate\Support\Facades\DB;


class Studentvoircompanies extends Controller
{
    public function showcompanies($name_companies) {
    
    
        $companie = Companie::find($name_companies);
        $address = $companie->address;
        $companyactivity = $companie->companieactivity;
        $activity = $companyactivity ->activity;
        return view ('student-voir-entreprise',['companies' => $companie,'addresses'=> $address,'activity'=>$activity]);
    }
    }