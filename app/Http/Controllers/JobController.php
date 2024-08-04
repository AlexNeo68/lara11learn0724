<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::with('employer')->latest()->cursorPaginate(3);
        return view('jobs.index', [
            'jobs' => $jobs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = request()->validate(
            [
                'name' => 'required|min:3',
                'salary' => 'required|numeric',
            ]
        );

        $job = Job::create([
            'name' => $data['name'],
            'salary' => $data['salary'],
            'employer_id' => 1,
        ]);

        return redirect('/jobs/')->with('success', 'Job created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        return view('jobs.show', ['job' => $job]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        return view('jobs.edit', ['job' => $job]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Job $job)
    {
        $data = request()->validate(
            [
                'name' => 'required|min:3',
                'salary' => 'required|numeric',
            ]
        );
        $job->update([
            'name' => $data['name'],
            'salary' => $data['salary'],
        ]);
        return redirect("/jobs/$job->id")->with('success', 'Job updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        $job->delete();
        return redirect('/jobs/')->with('success', 'Job deleted successfully!');
    }
}
