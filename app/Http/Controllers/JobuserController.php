<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Job;

use App\Models\User;

use Auth;

class JobuserController extends Controller
{
    public function index()
    {
        
        $jobs = Job::where('user_id',Auth::user()->id)->where('status',1)->orderBy('id','desc')->get();
    	return view('users.jobs.job_list',[
    		'jobs'=>$jobs
    	]);
    }

    public function jobDetails($id)
    {
    	$job = Job::find($id);
        if($job){
            if($job->user_id != Auth::user()->id){
                return redirect('/home')->with('error-message','You are not Authorized!');
            }
        }

        return view('users.jobs.job_detail',[
            'job'=>$job
        ]);
        
    	
    }

    public function jobQuotes($id)
    {
    	$job = Job::find($id);
        
        $job_quotes=$job->quotes()->paginate(8);
        return view('users.jobs.job_quote',[
          'job_quotes' => $job_quotes,
        ]);
    }
}
