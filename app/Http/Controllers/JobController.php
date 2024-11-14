<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('jobs', ['jobs' => Job::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Auth::guest()) {
            return redirect('/login');
        }

        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {


        request()->validate(
            [
                'title' => ['required'],
                'salary' => ['required'],
                'url'=>['required']
            ]

        );


        Job::create(
            [
                'title' => request('title'),
                'salary' => request('salary'),
                'employer_id' => 2,
                'url'=>request('url')

            ]
        );


        return redirect('/jobs');
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        return view('job', ['job' => $job]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        if (Auth::guest()) {
            return redirect('/login');
        }
        if ($job->employer->user->isNot(Auth::user())) {
            abort(403);
        }
        return view('edit', ['job' => $job]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( Job $job)
    {
        request()->validate(
            [
                "title" => ["required"],
                'salary' => ['required'],
            ]
        );

        $job->update(
            [
                'title' => request('title'),
                'salary' => request('salary'),
            ]
        );
        return redirect('/jobs/' . $job['id']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        Gate::authorize('edit-job', $job);
        $job->delete();
        return redirect('/jobs');
    }
}
