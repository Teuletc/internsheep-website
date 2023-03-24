<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\School;
use App\Models\Promotion;
use App\Models\Role;
use Illuminate\Support\Facades\DB;

class AdminPiloteController extends Controller
{
    public function show() {

        $pilote = DB::table('users')
        ->join('schools', 'schools.id', '=', 'users.schools_id')
        ->join('roles', 'users.roles_id', '=', 'roles.id')
        
        ->select('users.*', 'roles.id', 'schools.center_school')
        ->orderBy('users.id')
        ->get();


        return view('admin-pilote', ['users' => $pilote]);
    }
}
