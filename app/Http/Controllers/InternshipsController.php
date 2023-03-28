<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Companie;
use App\Models\Internship;
use App\Models\Addresses;
use Illuminate\Support\Facades\DB;

class InternshipsController extends Controller
{

    public function store(Request $request)
{
  $internship = new Internship;

  $internship->offer_internships = $request->input('titre-stage');
  $internship->name_companies = $request->input('entreprise');
  $internship->tags = $request->input('tags');
  $internship->ville = $request->input('ville');
  $internship->codepostal = $request->input('codepostal');
  $internship->description = $request->input('description');
  
  $internship->save();
  
  return redirect('/')->with('success', 'Le stage a été ajouté avec succès !');
}

}
