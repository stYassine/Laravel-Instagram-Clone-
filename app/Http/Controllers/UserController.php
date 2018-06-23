<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Auth;

class UserController extends Controller
{
    
    
    public function register(Request $request){
        
        dd($request->all());
        
        $this->validate($request, [
            'name' => 'required|min:6|max:99',
            'email' => 'required|email',
            'password' => 'required|min:6|max:99',
            'username' => 'required|min:3|max:99'
        ]);
        
        
        $user =new User;
        $user->name =$request->name;
        $user->email =$request->email;
        $user->password =Hash::make($request->password);
        $user->profile ='';
        $user->username =$request->username;
        $user->save();
        
        
        
    }
    
    public function login(Request $request){
        
        $credentials =$request->only('email', 'password');
        
        if(Auth::attempt($credentials)){
            
            return redirect()->route('profile', ['id' => Auth::id()]);
            
            $user =$user::find('email', $request->email); 
        
            Auth::login($user);
            
        }else{
            return redirect()->back();
        }
        
       
    }
    
    
    public function logout(Request $request){
        
        if(Auth::check()){
            Auth::logout();
            return redirect()->back();
        }else{
            return redirect()->back();
        }
        
    }
    
    
    
}
