<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use Illuminate\Support\Facades\Auth;
use App\Models\JobLocation;
use App\Models\JobCategory;
use App\Models\Company;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::all();
        return view('jobs.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $locations = JobLocation::all();
        $categories = JobCategory::all();
        return view('jobs.create', compact('locations', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $company = Company::where('user_id', Auth::id())->first();
        $location = JobLocation::where('City', $request->city)->where('Country', $request->country)->first();
        $category = JobCategory::where('CategoryName', $request->category)->first();
        $request->merge(['CompanyID' => $company->id, 'LocationID' => $location->id, 'CategoryID' => $category->id]);
        $request->validate([
            'CompanyID' => 'required|exists:companies,id',
            'title' => 'required|string|max:100',
            'description' => 'required|string',
            'type' => 'required|in:Full-Time,Part-Time,Contract,Internship',
            'CategoryID' => 'required|exists:job_categories,id',
            'LocationID' => 'required|exists:job_locations,id',
            'salary' => 'nullable|numeric',
        ]);

        $job = Job::create([
            'CompanyID' => $request->CompanyID,
            'JobTitle' => $request->title,
            'JobDescription' => $request->description,
            'JobType' => $request->type,
            'CategoryID' => $request->CategoryID,
            'LocationID' => $request->LocationID,
            'Salary' => $request->salary,
        ]);
        return redirect()->route('jobs.show', $job);
    }

    /**
     * Display the specified resource.
     */

    public function show(Job $job)
    {
        $similarJobs = Job::where('id', '!=', $job->id)
            ->where(function ($query) use ($job) {
                $query->where('JobTitle', 'like', '%' . $job->JobTitle . '%')
                    ->orWhere('LocationID', $job->LocationID)
                    ->orWhere('JobType', $job->JobType)
                    ->orWhereBetween('Salary', [$job->Salary * 0.9, $job->Salary * 1.1]);
            })
            ->limit(6)
            ->get();

        return view('jobs.show', compact('job', 'similarJobs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
