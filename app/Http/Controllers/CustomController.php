<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userr;

//use Session;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use SebastianBergmann\Environment\Console;

class CustomController extends Controller
{
    //
    public function login(){
        return view("auth.login");
    }
    public function registration(){
        return view("auth.registration");
    }
    public function registerStore(Request $request){
        // $pass = null;
        // $pass = $request->password;
        $userr = new Userr();
        $userr->name=$request->name;
        $userr->email=$request->email;
        $userr->password= Hash::make($request->password);
        $userr->save();

        $request->session()->put('loginId',$userr->id);
       
        return redirect('/dashboard');
    }
    public function loginUser(Request $request){
  
         $userr = Userr::where('email',$request->email)->first();
                if($userr){
                    if (Hash::check($request->password,$userr->password))
                    {
                       // return back()->with('success','Login Successfuly');
                       $request->session()->put('loginId',$userr->id);
                       return redirect('/dashboard');
                    }else{
                        return back()->with('fail','Password Incorrect');
                    }
                   
                }else{
                    return back()->with('fail','Email Not Found');
                }      

    }
    public function dashboard(){
        if (Session::has('loginId')){
            return view('dashboard');
        }
        
    }
    public function logout(){
        if (Session::has('loginId')){
            Session::pull('loginId');
            return redirect('/login');
        }
        
    }
       
      
}
