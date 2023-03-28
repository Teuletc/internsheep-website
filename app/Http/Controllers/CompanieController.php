<?php

namespace App\Http\Controllers;

use App\Models\Addresse;
use App\Models\Companie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompanieController extends Controller
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

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $companie = new Companie;

        $companie->name_companies = $request->input('nom');
        $companie->logo = $request->input('logo');
        $companie->additional_info = $request->input('additional_info');
        
        $companie->save();
        
        $addressesFields= $request->validate([
            'countries' => 'required',
            'city' => 'required',
            'zip_code' => 'required',
            'name_street' => 'required',
            'num_way' => 'required',
            'additional_addresses',
        ]);

        $companie->addresses()->create($addressesFields);
        $companie->activities()->attach($request->input('secteur'));


      return redirect('/admin-companie')->with('success', 'Entreprise a été ajouté avec succès !');
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
    public function destroy(Companie $companie)
{
    // Supprimer les adresses liées à cette entreprise
    DB::table('addresses')->where('companies_id', $companie->id)->delete();

    // Supprimer l'entreprise elle-même
    $companie->delete();

    return redirect('/admin-companie')->with('success', 'Le stage a été supprimé avec succès !');
}

    
}
