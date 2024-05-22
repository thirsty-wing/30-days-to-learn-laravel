<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            [
                'id' => 1,
                'salary' => '$50,000',
                'title' => 'Director',
            ],
            [
                'id' => 2,
                'salary' => '$10,000',
                'title' => 'Programmer',
            ],
            [
                'id' => 3,
                'salary' => '$40,000',
                'title' => 'Teacher',
            ],
        ],
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        [
            'id' => 1,
            'salary' => '$50,000',
            'title' => 'Director',
        ],
        [
            'id' => 2,
            'salary' => '$10,000',
            'title' => 'Programmer',
        ],
        [
            'id' => 3,
            'salary' => '$40,000',
            'title' => 'Teacher',
        ],
    ];

    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);

    return view('job', [ 'job' => $job ]);
});

Route::get('/contact', function () {
    return view('contact');
});
