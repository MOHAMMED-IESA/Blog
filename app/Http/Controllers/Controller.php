<?php

namespace App\Http\Controllers;

// use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function SignupView(){
        return view('signup');
    }


    public function SaveSignupData(Request $req){

            $user = new User();
            $user->f_name = $req['fname'];
            $user->l_name = $req['lname'];
            $user->user_name = $req['username'];
            $user->password = bcrypt($req['password']);
            $user->contact = $req['contact'];
            $user->email = $req['email'];
    
            $user->save();
        return redirect('/login');
    }

    public function LoginView(){

        if(session()->has('user')){
            return redirect('/');
        }
        else{
            return view('login');
        }
    }

    public function SaveLoginData(Request $req){

        $user = User::where(['email' => $req->email])->first();
        // return $user;
        if (!$user || !Hash::check($req->password, $user->password)) {
            return "User Name and Password are incorrect.";
        }
        else {     
            Session::put('user', $user);
            Session::put('email', $user->email);
            Session::put('id', $user->id);
            Session::put('name', $user->user_name);
        }
        return redirect('/');
    }

    public function logout(){
       if(  session()->has('user')){
        session()->forget(['user','email','id','name']);
       }
       return redirect('login');    
    }

    public function forgetPassView(){
        return view('forget_pass');

    }

    public function forgetPassUpdate(Request $req){
        $email = User::where('email',$req['email'])->first();
        

    }
}
