<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Photo;
use App\Like;
use App\Comment;
use App\Follower;

use Auth;
use File;


class ProfileController extends Controller
{
    
    /* Profile 
        ===================================== */
    public function profilePage($id){
        
        $user =User::find($id);
        $photos =Photo::where('user_id', $user->id)->get();
        
        /*$auth_user =Auth::id();*/
        $auth_user =2;
        
        $auth_user_following_this_profile =false;
        
        $followers =Follower::where('profile_id', $user->id)->get();
        $following =Follower::where('follower_id', $user->id)->get();
        
        $followers_ids =[];
        
        /*return $followers;*/
        
        foreach($followers as $follower){
            array_push($followers_ids, $follower->id);
        }
        
        if(in_array($auth_user, $followers_ids)){
            $auth_user_following_this_profile =true;
        }else{
            $auth_user_following_this_profile =false;
        }
        
        return view('index')->with([
            'user' => $user,
            'photos' => $photos,
            'followers' => $followers,
            'following' => $following,
            'auth_user_following_this_profile' => $auth_user_following_this_profile
        ]);
        
    }
    
    public function profileSettingsPage(){
        
        /*$user =User::find(Auth::id());*/
        
        $user =User::find(1);
        
        return view('profile_settings')->with([
            'user' => $user
        ]);
        
    }
    
    public function editProfileInfo(Request $request){
        
        /*$this->validate($request, [
            
        ]);*/
        
        $user =User::where('id', Auth::id())->first();
        $user->name =$request->name;
        $user->email =$request->email;
        $user->username =$request->username;
        $user->website =$request->website;
        $user->bio =$request->bio;
        $user->number =$request->number;
        $user->gender =$request->gender;
        $user->save();
        
        return response()->back();
        
    }
    
    public function changePassword(Request $request){
        
        $this->validate($request, [
            'name' => 'required|min:3|max:100',
            'email' => 'required|email',
            'username' => 'required|min:3|max:120',
            'website' => 'required',
            'bio' => 'required',
            'number' => 'required',
            'gender' => 'required'
        ]);
        
        $user =User::where('id', Auth::id())->first();
        $user->password =bcrypt($request->password);
        $user->save();
        
        return redirect()->back();
        
    }
    
    public function changeProfileImage(Request $request){
        
        $this->validate($request, [
            'photo' => 'required',
        ]);
        
        $image =$request->file('photo');
        $image_name =time().$image->getClientOriginalName();
        $image->move('uploads/avatars', $image_name);
        
        $user =User::find(Auth::id());
        $user->profile ='uploads/avatars/'.$image_name;
        $user->save();
        
        return redirect()->back();
        
    }
    
    
    /* Photos System 
        ===================================== */
    public function uploadNewPhoto(Request $request){
        
        $this->validate($request, [
            'photo' => 'required',
        ]);
        
        $image =$request->file('photo');
        $image_name =time().$image->getClientOriginalName();
        $image->move('uploads/photos', $image_name);
        
        $photo =new Photo();
        $photo->user_id =Auth::id();
        $photo->description =$request->description;
        $photo->path =$image_name;
        $photo->save();
        
        return redirect()->back();
        
    }
    
    public function updatePhoto(Request $request){
        
    }
    
    public function deletePhoto(Request $request){
        
        $photo =Photo::find();
        File::delete($photo->path);
        $photo->delete();
        
        return redirect()->back();
    }
    
    
    /* Follow System
        ===================================== */
    public function followUser(Request $request){
        
        $this->validate($request, [
            'profile_id' => 'required|integer',
            'follower_id' => 'required|integer'
        ]);
        
        $follower =new Follower;
        $follower->profile_id =$request->profile_id;
        $follower->follower_id =$request->follower_id;
        $follower->save();
        
        return redirect()->back();
        
    }
    
    public function unFollowUser(Request $request){
        
        $follower =Follower::where('profile_id', $request->profile_id)->where('follower_id', $request->follower_id)->first();
        $follower->delete();
        
        return redirect()->back();
        
    }
    
    
    /* Like System
        =====================================  */
    public function likePhoto(Request $request){
        
        $this->validate($request, [
            'user_id' => 'required|integer',
            'photo_id' => 'required|integer'
        ]);
        
        $like =new Like;
        $like->user_id =$request->user_id;
        $like->photo_id =$request->photo_id;
        $like->save();
        
        return redirect()->back();
        
    }
    
    public function unlikePhoto(Request $request){
        
        $like =Like::where('user_id', $request->user_id)->where('photo_id', $request->photo_id)->first();
        $like->delete();
        
        return redirect()->back();
    }
    
    
    /** Comments System
        ===================================== **/
    public function commentOnPhoto(Request $request){
        
        $this->validate($request, [
            'user_id' => 'required|integer',
            'photo_id' => 'required|integer',
            'body' => 'required|min:3|max:1000'
        ]);
        
        $comment =new Comment;
        $comment->user_id =$request->user_id;
        $comment->photo_id =$request->photo_id;
        $comment->body =$request->body;
        $comment->save();
        
        return redirect()->back();
    }
    
    public function editComment(){
        
        $this->validate($request, [
            'user_id' => 'required|integer',
            'photo_id' => 'required|integer',
            'body' => 'required|min:3|max:1000'
        ]);
        
        $comment =Comment::find($id);
        $comment->user_id =$request->user_id;
        $comment->photo_id =$request->photo_id;
        $comment->body =$request->body;
        $comment->save();
        
        return redirect()->back();
        
    }
    
    public function deleteComment(Request $request){
     
        $comment =Comment::where('id', $request->id)->where('user_id', Auth::id())->first();
        $comment->delete();
        
        return redirect()->back();
        
    }
    
    
    
    
    
}
