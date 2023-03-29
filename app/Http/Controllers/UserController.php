<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Store a newly created user in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Create a new user
        $user = new User;

        // Set user attributes
        $user->usersname = $request->input('username');
        $user->password = $request->input('password');
        $user->last_name = $request->input('last_name');
        $user->first_name = $request->input('first_name');
        $user->email = $request->input('email');

        $user->campus = $request->input('campus');
        $user->adresse = $request->input('adresse');
        $user->ville = $request->input('ville');
        $user->code_postal = $request->input('code_postal');

        // Save the user
        $user->save();

        // Redirect back to the previous page
        return back()->with('success', 'Utilisateur créé avec succès !');
    }

    /**
     * Remove the specified user from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {

        DB::table('applications')->where('users_id', $user->id)->delete();
        DB::table('users_has_internships')->where('users_id', $user->id)->delete();
        DB::table('users_has_skills')->where('users_id', $user->id)->delete();
        DB::table('applications')->where('users_id', $user->id)->delete();

        // Delete the user
        $user->delete();


        // Redirect back to the previous page
        return back()->with('success', 'Utilisateur supprimé avec succès !');
    }
}
