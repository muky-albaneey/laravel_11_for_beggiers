<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/jobs', function(){
    $jobs = Job::with('employer')->latest()->cursorPaginate(5);
    return view('jobs.index',['jobs'=>$jobs]);
});

Route::get('/jobs/create', function(){
    return view('jobs.create');
});

Route::get('/jobs/{job}', function(Job $job){
    // $job =  Job::find($id);

    return view('jobs.show',['job'=>$job]);
});

Route::get('/jobs/{job}/edit',function(Job $job){
    return view('jobs.edit',['job'=>$job]);
});

Route::patch('/jobs/{job}', function(Job $job){

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
});

Route::post('/jobs', function(){
    request()->validate([
        'title'=>['required', 'min:3'],
        'salary'=> ['required', ]
    ]);

    Job::create([
        'title' => request('title'),
        'salary'=>request('salary'),
        'employer_id'=>1
    ]);

    return redirect('/jobs');
});
