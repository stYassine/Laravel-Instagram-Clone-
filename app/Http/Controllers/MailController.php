<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\ContactForm:
use Mail;

class MailController extends Controller
{
    
    
    public function postContact(Request $request){
        
        $this->validate($request, [
            
        ]);
        
        Mail::to('admin@admin.com')->send(new ContactForm());
        
        return redirect()->back();
        
    }
    
}
