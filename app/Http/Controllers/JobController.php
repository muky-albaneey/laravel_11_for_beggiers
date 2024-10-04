<?php

namespace App\Http\Controllers;

use App\Mail\JobPosted;
use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;

class JobController extends Controller
{

    public function index()
    {
        $jobs = Job::with('employer')->latest()->cursorPaginate(5);
        return view('jobs.index',['jobs'=>$jobs]);
    }

    public function show(Job $job)
    {
        return view('jobs.show',['job'=>$job]);
    }

    public function create()
    {
        return view('jobs.create');
    }
    public function store()
    {

        request()->validate([
            'title'=>['required', 'min:3'],
            'salary'=> ['required', ]
        ]);



        $employer_id = Auth::user()->employer->id;
        $job = Job::create([
            'title' => request('title'),
            'salary'=>request('salary'),
            'employer_id'=>$employer_id
        ]);

        Mail::to('mukyalbani1@gmail.com')->send(
            new JobPosted($job)
        );

        return redirect('/jobs');

    }

    public function edit(Job $job)
    {



        // Gate::authorize('joe', $job);
        // if(Auth::guest()){
        //     return redirect('/login');
        // }

        // if($job->employer->user->isNot(Auth::)){
        //     abort(403);
        // }


        return view('jobs.edit',['job'=>$job]);
    }

    public function update(Job $job)
    {
         // validate
        request()->validate(
            [
                'title'=> ['required', 'min:4'],
                'salary'=>['required']
            ]
            );
        //authorize

        //update

        // $job->title = request('title');
        // $job->salary  = request('salary');
        // $job->save();

            $job->update([
                'title'=>request('title'),
                'salary'=>request('salary'),

            ]);
        return redirect('/jobs');
    }

    public function destroy(Job $job)
    {
        $job->delete();

        return redirect('/jobs');
        // dd($job);
    }
}
