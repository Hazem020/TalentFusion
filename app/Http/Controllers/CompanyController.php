<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
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
        return view('company.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|string|max:100',
                'website' => 'required|url|max:100',
                'description' => 'required|string',
            ]
        );
        $company =  Company::create(
            [
                'CompanyName' => $request->name,
                'Website' => $request->website,
                'Description' => $request->description,
                'user_id' => Auth::user()->id,
            ]
        );
        return redirect()->route('company.show', ['company' => $company->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        $jobs = $company->jobs;
        return view('company.show', compact('company', 'jobs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        return view('company.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Company $company)
    {
        $request->validate(
            [
                'name' => 'required|string|max:100',
                'website' => 'required|url|max:100',
                'description' => 'required|string',
            ]
        );

        $company->update(
            [
                'CompanyName' => $request->name,
                'Website' => $request->website,
                'Description' => $request->description,
            ]
        );
        return redirect()->route('company.show', $company);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
