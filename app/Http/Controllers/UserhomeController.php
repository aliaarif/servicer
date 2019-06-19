<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;
use App\Models\City;
use Auth;
use File;
use Image;
use Hash;

class UserhomeController extends Controller
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
        return view('users.home');
    }

    public function updateProfile()
    {
        $user = Auth::user();
        $city = City::where('id', $user->city_id)->first()->name;
        $cities = City::where('state_id', $user->state_id)->get();

        return view('users.profile',[ 
            'user' => $user,
            'city'=>$city,
            'cities'=>$cities
        ]);
    }

    public function saveUpdateProfile(Request $request)
    {
        $this->validate($request,[
            'first_name'          => 'required|max:255',
            'last_name'           => 'required|max:255',
            'apt_no'              => 'required|max:10',
            'address'             => 'required|max:255',
            'city'                => 'required|max:20',
            'mobile'              => 'required|numeric',
            'pincode'             => 'required|numeric',
        ]);

        $user = Auth::user();
        $user->first_name   =  $request->input('first_name');
        $user->last_name    =  $request->input('last_name');
        $user->apt_no       =  $request->input('apt_no');
        $user->address      =  $request->input('address');
        $user->city_id      =  $request->input('city');
        $user->pincode      =  $request->input('pincode');
        $user->update();

        return redirect('home/update-profile')->with('success-message','Profile Updated Successfully!');
    }


    public function userProfileUpdate(Request $request){

        $this -> validate($request, [
            'avatar' => 'required|mimes:jpeg,jpg,png'
        ]);

        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '_avatar.' . $avatar->getClientOriginalExtension();
            $filenametostore = date('Ymd')."_".time().".".$avatar->getClientOriginalExtension();
            $imgPath = public_path()."\\uploads\\profiles\\".$filename;
            Image::make($avatar)->fit(400)->save($imgPath);

            $user = User::find(Auth::user()->id);

            if(!empty($user->avatar)){
                $image = $imgPath.$user->avatar;
                if(file_exists($image)) {
                    unlink(public_path()."\\uploads\\profiles\\".$user->avatar);
                }
            }

            $user->avatar = $filename;
            $user->save();
        }

        return redirect("home/update-profile")->with('success-message','Profile photo updated successfully!');    
    }




    public function updatePassword()
    {
     return view('users.password');
 }

 public function updateSavePassword(Request $request)
 {
     $this->validate($request,[
        'original_password'  => 'required',
        'password'  => 'required|confirmed'
    ]);

     $user = Auth::user();

     if(!password_verify($request->input('original_password'), $user->password)){
        return redirect('home/update-password')->with('error-message','Invalid Original Password!');
    }else{
       $user->password = bcrypt($request->input('password'));
       $user->update();
       return redirect('home/update-password')->with('success-message','Password Changed Successfully!');
   }

}
}
