<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies= Company::all();
        return view('company.index',compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $trips= Trip::all();
        return view ('company.create', compact('trips'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $company= Company::create([
        
        'username'=>$request->name,
        'nation'=>$request->nation

        ]);
        $company->Trips()->attach($request->trips);
        return redirect (route('home'))->with('CompanyCreated', 'Compagnia creata con successo');
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        return view('company.show', compact('company'));
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
    public function destroy(Company $company)
    {
        //
    }
}
