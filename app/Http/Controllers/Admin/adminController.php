<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;
use Hash;
use Auth;
use Illuminate\Support\Facades\Session;
class adminController extends Controller
{
    //
    public function dashboard(){

        return view('admin.dashboard');
    }
    public function login(Request $request){

        //echo $password=Hash::make("wessen123"); 
        // die;

        if($request->isMethod('post')){

               $data=$request->all();
                //dd( $data);  //dd( $data);
                // echo "<pre>"; print_r($data);echo "<pre>"; 


                $validated = $request->validate([
                    'email' => 'required|email|max:255',
                    'password' => 'required',
                ]);
                $request['status']=1;
                $credentials = $request->only('email', 'password','status');     

                if(Auth::guard('admin')->attempt($credentials)){
                    return  redirect("admin/dashboard");

                }else{
                    return redirect()->back()->with('error_message','Invalid Email or Password');

                }

        }
        return view('admin.login');
    }
    
    public function logout(){

        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }
}
