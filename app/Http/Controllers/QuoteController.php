<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Job;
use Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class QuoteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    
    public function getQuoteForm(Request $request)
    {
        $category       = $request->input('category');
        $form           = Category::find($category);
        return response()->json($form->quote_form_id);
    }

    public function getSubCategories(Request $request)
    {
        $parent_id      = $request->input('sub_category');
        $subcategories  = Category::where('parent_id',$parent_id)->get();
        return response()->json($subcategories);
    }

    public function submitQuoteForm1(Request $request)
    {   
        
        //if not logged in
        if(Auth::guest()){
            if($request->input('login_register') == 'login'){
                $authSuccess = Auth::attempt([
                    'email'         => $request->input('login_email'), 
                    'password'      => $request->input('login_password'), 
                    'user_type_id'  => 1
                ]);
                $request->session()->regenerate();
            }

            if($request->input('login_register') == 'register'){
                $authSuccess = Auth::attempt([
                    'email'         => $request->input('register_email'), 
                    'password'      => $request->input('register_password'), 
                    'user_type_id'  => 1
                ]);
                $request->session()->regenerate();
            }
        }

        /*echo "<pre>";
        print_r($request->all());
        exit();*/

        //save details
        $job = new Job();
        $job->job_type_id       = 1;
        $job->user_id           = Auth::user()->id;
        $job->title             = $request->input('job_title');
        $job->description       = $request->input('job_description');
        $job->images            = $request->input('quote_1_images');
        $job->job_frequency_id  = $request->input('job_frequerncy');
        $job->jobcategory_id    = $request->input('job_types');
        //$job->apartment_number  = $request->input('job_title');
        $job->address           = $request->input('job_address');
        $job->city_id           = $request->input('job_city');
        $job->pincode           = $request->input('job_pincode');
        $job->save();

        //attach categories
        if(count($request->input('subcategory')) > 0){
            $job->categories()->attach($request->input('subcategory'));
        }

        return redirect('/home')->with('success-message', "Quote request created successfully!");
    }

    public function uploadQuoteImage(Request $request){
        $image     = $request->file('file');
        $imageName = $image->getClientOriginalName();
        $newName   = time().'.png';
        $image->move(public_path('uploads/quotes'),$newName);
        return response()->json($newName);
    }


    public function getQuoteStep1($category_id){
        $subcategories  = Category::where('parent_id',$category_id)->get();
        return view('quotes.quote-step-1',['category_id'=>$category_id,'subcategories'=>$subcategories]);
    }

    public function storeQuoteStep1(Request $request,$category_id){
        $subcategories = $request->input('sub_categories');

        $job = new Job();
        $job->job_type_id       = 1;
        $job->status            = 0;
        $job->save();

        if(count($subcategories) > 0){
            $job->categories()->attach($request->input('sub_categories'));
        }

        return redirect('quote/'.$category_id.'/step-3/'.$job->id);
    }

    public function getQuoteStep2($category_id,$job_id){
        return view('quotes.quote-step-2');
    }

    public function getQuoteStep3($category_id,$job_id){
        return view('quotes.quote-step-3',['category_id'=>$category_id,'job_id'=>$job_id]);
    }


    public function storeQuoteStep3(Request $request,$category_id,$job_id){
        $job = Job::find($job_id);
        $job->title             = $request->input('job_title');
        $job->description       = $request->input('job_description');
        $job->images            = $request->input('quote_1_images');
        $job->job_frequency_id  = $request->input('job_frequerncy');
        $job->jobcategory_id    = $request->input('job_types');
        $job->update();

        return redirect('quote/'.$category_id.'/step-4/'.$job->id);
    }

    public function getQuoteStep4($category_id,$job_id){
        return view('quotes.quote-step-4',['category_id'=>$category_id,'job_id'=>$job_id]);
    }

    public function storeQuoteStep4(Request $request,$category_id,$job_id){

        //if login
        if($request->input('login_register') == 'login'){
            $this->validate($request, [
                'job_address'    => 'required', 
                'job_city'       => 'required',
                'job_pincode'    => 'required',
                'login_email'    => 'required|email',
                'login_password' => 'required',
            ]);


            $authSuccess = Auth::attempt([
                'email'         => $request->input('login_email'), 
                'password'      => $request->input('login_password'), 
                'user_type_id'  => 1
            ]);

            if($authSuccess) {
                $request->session()->regenerate();
            }else{
                return redirect()->back()->with('snackbar-message','Wrong email ID & password!')->withInput();
            }

        }elseif($request->input('login_register') == 'register'){
            $this->validate($request, [
                'job_address'           => 'required', 
                'job_city'              => 'required',
                'job_pincode'           => 'required',
                'register_first_name'   => 'required',
                'register_last_name'    => 'required',
                'register_email'        => 'required|email|unique:users,email,NULL,id,user_type_id,1',
                'register_password'     => 'required',
            ]);

            $first_name = $request->input('register_first_name');
            $last_name  = $request->input('register_last_name');
            $email      = $request->input('register_email');
            $password   = $request->input('register_password');

            //check if email id already exists
            $check_user = User::where('email',$email)->where('user_type_id',1)->count();
            if($check_user > 0){
                return redirect()->back()->with('snackbar-message','Email ID already exists.')->withInput();
            }

            //register user
            User::create([
                'first_name'    => $first_name,
                'last_name'     => $last_name,
                'email'         => $email,
                'password'      => Hash::make($password),
                'user_type_id'  => 1
            ]);

            //login
            $authSuccess = Auth::attempt([
                'email'         => $email, 
                'password'      => $password, 
                'user_type_id'  => 1
            ]);

            if($authSuccess) {
                $request->session()->regenerate();
            }
        }else{
            $this->validate($request, [
                'job_address'           => 'required', 
                'job_city'              => 'required',
                'job_pincode'           => 'required',
            ]);
        }
        

        $job = Job::find($job_id);
        $job->user_id           = Auth::user()->id;
        $job->status            = 1;
        $job->address           = $request->input('job_address');
        $job->city_id           = $request->input('job_city');
        $job->pincode           = $request->input('job_pincode');
        $job->update();

        return redirect('quote/'.$category_id.'/step-5/'.$job->id);
    }


    public function getQuoteStep5($category_id,$job_id){
        return view('quotes.quote-step-5',['category_id'=>$category_id,'job_id'=>$job_id]);
    }

}
