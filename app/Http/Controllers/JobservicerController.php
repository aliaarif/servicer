<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Quote;
use App\Models\User;
use App\Models\City;
use Auth;
use File;
use Image;
use Hash;

class JobservicerController extends Controller
{
    public function jobList()
    {
        $quotes = Quote::where('provider_id',Auth::guard('servicer')->user()->id)->get();
        return view('servicers.job_lists',[
        'quotes'=> $quotes
        ]);
    }

    public function jobDetails($id)
    {
        $quote = Quote::find($id);
        // $job_quotes=$quote->job;
        return view('servicers.job_details',[
        'quote' => $quote,
        ]);
    }

    public function quoteDetails($id)
    {
        $quote = Quote::find($id);
        $job_quotes=$quote->job;
        return view('servicers.quote_details',[
          'quote' => $quote,
          'job_quotes' => $job_quotes,
        ]);
    }
}
