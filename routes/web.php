<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
});
Route::get('/jobs', function () {

    $jobs = Job::with('employer')->latest()->cursorPaginate(3);
    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});
Route::get('/jobs/create', function () {

    return view('jobs.create');
});

Route::post('/jobs', function () {

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
});

Route::get('/jobs/{id}', function ($id) {

    $job = Job::find($id);
    return view('jobs.show', ['job' => $job]);
});

Route::get('/jobs/{id}/edit', function ($id) {

    $job = Job::find($id);
    return view('jobs.edit', ['job' => $job]);
});

Route::patch('/jobs/{id}', function ($id) {
    $data = request()->validate(
        [
            'name' => 'required|min:3',
            'salary' => 'required|numeric',
        ]
    );
    $job = Job::findOrFail($id);
    $job->update([
        'name' => $data['name'],
        'salary' => $data['salary'],
    ]);
    return redirect("/jobs/$job->id")->with('success', 'Job updated successfully!');
});

Route::delete('/jobs/{id}', function ($id) {
    Job::findOrFail($id)->delete();
    return redirect('/jobs/')->with('success', 'Job deleted successfully!');
});



Route::get('/contacts', function () {
    return view('contacts');
});
