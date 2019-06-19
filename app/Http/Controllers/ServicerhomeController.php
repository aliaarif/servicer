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

class ServicerhomeController  extends Controller
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
        return view('servicers.home');
    }

    public function viewProfile()
    {
        $servicer = Auth::guard('servicer')->user();
        return view('servicers.profile',[ 
            'servicer' => $servicer
        ]);
    }

    public function updateProfile()
    {
        $city = City::all();
        $servicer = Auth::guard('servicer')->user();
        return view('servicers.update_profile',[ 
            'servicer' => $servicer,
            'city'=>$city
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
            'pincode'             => 'required|numeric',
        ]);

        $servicer = Auth::guard('servicer')->user();

    
        $servicer->first_name   =  $request->input('first_name');
        $servicer->last_name    =  $request->input('last_name');
        $servicer->apt_no       =  $request->input('apt_no');
        $servicer->address      =  $request->input('address');
        $servicer->city_id      =  $request->input('city');
        $servicer->pincode      =  $request->input('pincode');
        $servicer->update();

        return redirect('/servicer/home/update-profile')->with('success-message','Profile Updated Successfully!');
    }

     public function servicerProfileUpdate(Request $request){

        $this -> validate($request, [
                'avatar' => 'required|mimes:jpeg,jpg,png'
        ]);

        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '_avatar.' . $avatar->getClientOriginalExtension();
             $filenametostore = date('Ymd')."_".time().".".$avatar->getClientOriginalExtension();
            $imgPath = public_path()."\\uploads\\profiles\\".$filename;
            Image::make($avatar)->fit(400)->save($imgPath);

            $user = User::find(Auth::guard('servicer')->user()->id);

            if(!empty($user->avatar)){
                $image = $imgPath.$user->avatar;
                if(file_exists($image)) {
                    unlink(public_path()."\\uploads\\profiles\\".$user->avatar);
                }
            }

            $user->avatar = $filename;
            $user->save();
        }

        return redirect("servicer/home/update-profile")->with('success-message','Profile photo updated successfully!');    
    }



    public function updatePassword()
    {
       return view('servicers.update_password');   
    }

    public function updateSavePassword(Request $request)
    {
       $this->validate($request,[
            'original_password'  => 'required',
            'password'  => 'required|confirmed'
        ]);

       $servicer = Auth::guard('servicer')->user();

       if(!password_verify($request->input('original_password'), $servicer->password)){
            return redirect('servicer/home/update-password')->with('error-message','Invalid Original Password!');
       }else{
             $servicer->password = bcrypt($request->input('password'));
             $servicer->update();
             return redirect('servicer/home/update-password')->with('success-message','Password Changed Successfully!');
       }

    }

    

}
