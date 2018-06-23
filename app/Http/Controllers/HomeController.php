<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Photo;
use App\Comment;
use App\Like;

class HomeController extends Controller
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
        return view('home');
    }
    
    
    
    public function landingPage(){
        return view('landing_page');
    }
    
    public function registerPage(){
        return view('sign_up');
    }
    
    public function loginPage(){
        return view('sign_in');
    }
    
    public function homePage(){}
    
    
    
    public function showPopup(Request $request){
        
        $photo =Photo::find($request->id);
        
        $comments =$photo->comments->all();
        
        return view('partials.photo_poopup')->with([
            'photo' => $photo,
            'comments' => $comments
        ]);
        
        
    }
    
    
    
    
}
