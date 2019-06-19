<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


// Original password '$2y$10$OogaDuEzc3xJlQk4lcpV/OELAvFcfUHsU.kVzk7GlTJnOi1RSGf.K'


        //die(password_hash("password", PASSWORD_BCRYPT));

        //if servicer then go to dashboard
        if(Auth::guard('servicer')->user()){
            return redirect('/servicer/home');
        }

        $categories = Category::where('parent_id',0)->get();

        //dd($categories);

        return view('index',['categories'=>$categories]);
    }


    public function ajaxUserLogin(Request $request)
    {
        $authSuccess = Auth::attempt([
            'email'         => $request->input('email'), 
            'password'      => $request->input('password'), 
            'user_type_id'  => 1
        ]);

        if($authSuccess) {
            $request->session()->regenerate();
            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false, 'message' => 'Wrong email or poassword.']);
    }

    public function ajaxUserRegister(Request $request)
    {
        $first_name = $request->input('first_name');
        $last_name  = $request->input('last_name');
        $email      = $request->input('email');
        $password   = $request->input('password');

        //check if email id already exists
        $check_user = User::where('email',$email)->where('user_type_id',1)->count();
        if($check_user > 0){
            return response()->json(['success' => false, 'message' => 'Email ID already exists.']);
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
            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false, 'message' => 'Wrong email or poassword.']);

    }
}
