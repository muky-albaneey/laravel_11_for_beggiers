<?php

namespace App\Policies;

use App\Models\Job;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class JobListing
{
   public function edit(Job  $job , User $user){
     return $job->employer->user->is($user);
   }
}
