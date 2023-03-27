<?php

namespace App\Http\Controllers;

use App\Models\Companie;
use App\Models\Companie_rate;
use App\models\Internships;
use App\models\Addresse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentPageController extends Controller
{
    public function show()//User $users
     {
        
            $entreprises = DB::table('companies')
            ->join('companies_rate', 'companies_rate.companies_id', '=', 'companies.id')
            ->select('companies.*', 'rate')
            ->orderByDesc('rate')
            ->get();
             
            //echo $result->take(2);
            $bestrate = $entreprises->pluck('rate')->first();
            $secondbestrate = $entreprises->pluck('rate')->skip(1)->first();
            $thirdbestrate = $entreprises->pluck('rate')->skip(2)->first();
           $fourbestrate = $entreprises->pluck('rate')->skip(3)->first();
           $fivebestrate = $entreprises->pluck('rate')->skip(4)->first();
            $sixbestrate = $entreprises->pluck('rate')->skip(5)->first();


            $stages = DB::table('companies')
        ->join('internships','internships.companies_id','=', 'companies.id')
        ->join('addresses','addresses.companies_id','=', 'companies.id')
        ->Select ('internships.id','name_companies','city','offer_internships','date_internships')
        ->orderByDesc('id')
        ->get();

$id1 = $stages->pluck('id')->first();
$id2 = $stages->pluck('id')->skip(1)->first();
$id3 = $stages->pluck('id')->skip(2)->first();
$id4 = $stages->pluck('id')->skip(3)->first();
$id5 = $stages->pluck('id')->skip(4)->first();

        
            return view('student-page', ['companies' => $entreprises,'bestrate' => $bestrate,'secondbestrate' => $secondbestrate,'thirdbestrate' => $thirdbestrate,'fourbestrate' => $fourbestrate,'fivebestrate' => $fivebestrate,'sixbestrate' => $sixbestrate,
            'stages' => $stages, 'id1' => $id1, 'id2' => $id2 , 'id3'=> $id3,'id4' => $id4 , 'id5'=> $id5] );
}
}