<?php

use Illuminate\Support\Facades\Route;

$jobs = [
    [
        'id' => 1,
        'name' => 'Director',
        'salary' => '$50 000',
    ],
    [
        'id' => 2,
        'name' => 'Programmer',
        'salary' => '$10 000',
    ],
    [
        'id' => 3,
        'name' => 'Teacher',
        'salary' => '$40 000',
    ],
];

Route::get('/', function () {
    return view('home');
});
Route::get('/jobs', function () use ($jobs) {
    return view('jobs', [
        'jobs' => $jobs
    ]);
});
Route::get('/jobs/{id}', function ($id) use ($jobs) {

    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);
    return view('job', ['job' => $job]);
});


Route::get('/contacts', function () {
    return view('contacts');
});
