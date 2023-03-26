<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\School;
use App\Models\Promotion;
use App\Models\Role;
use Illuminate\Support\Facades\DB;


class AdminStudentController extends Controller
{
    public function show() {

        $student = DB::table('users')  
        ->join('schools', 'schools.id', '=', 'users.schools_id')
        ->join('roles', 'users.roles_id', '=', 'roles.id')
        ->join('promotions', 'promotions.id', '=', 'promotions_id')

        ->select('promotions.*','roles.*','schools.*','users.*')
        ->where('roles.id', '=' ,2)
        ->orderBy('users.id')
        ->get();

        return view('admin-student', ['users' => $student]);
    }
}
