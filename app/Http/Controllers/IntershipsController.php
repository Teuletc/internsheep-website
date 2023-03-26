<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Companie;
use App\Models\Intership;
use App\Models\Addresses;
use Illuminate\Support\Facades\DB;

class AdminOfferController extends Controller
{
    public function store(Request $request)
{
  $internship = new Internship;
  $internship->titre_stage = $request->input('titre-stage');
  $internship->entreprise = $request->input('entreprise');
  $internship->tags = $request->input('tags');
  $internship->ville = $request->input('ville');
  $internship->codepostal = $request->input('codepostal');
  $internship->description = $request->input('description');
  $internship->save();
  
  return redirect('/')->with('success', 'Le stage a été ajouté avec succès !');
}

}
