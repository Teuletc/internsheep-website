<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Companie;
use App\Models\Internship;
use App\Models\Addresse;
use Illuminate\Support\Facades\DB;

class InternshipsController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
      //
  }
  
  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
      //
  }
  
  
  public function store(Request $request)
  {

  $internship = new Internship;

  $internship->offer_internships = $request->input('titre-stage');
  $internship->name_companies = Companie::find($request->input('entreprise'))->name_companies;
//   $internship->tags = $request->input('tags');
  $internship->ville = $request->input('ville');
  $internship->codepostal = $request->input('codepostal');
//   $internship->description = $request->input('description');
  
  $internship->save();
  
  return redirect('/')->with('success', 'Le stage a été ajouté avec succès !');
}

/**
 * Display the specified resource.
 */
public function show(Company $company)
{
    //
}

/**
 * Show the form for editing the specified resource.
 */
public function edit(Company $company)
{
    //
}

/**
 * Update the specified resource in storage.
 */
public function update(Request $request, Company $company)
{
    //
}


/**
 * Remove the specified resource from storage.
 */
public function destroy(Intership $offer)
{
// Supprimer les adresses liées à cette entreprise
DB::table('internships')->where('companies_id', $companie->id)->delete();

// Supprimer le stage elle-même
$offer->delete();

return redirect('/admin-offer')->with('success', 'Le stage a été supprimé avec succès !');
}

}

