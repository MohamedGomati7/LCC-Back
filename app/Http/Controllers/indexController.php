<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class indexController extends Controller
{
    public function index(){
        return view ('index');
    }
    public function send(Request $request){
        request()->validate($this->rules());
        $data = array('firstname'  => $request->firstname,
                      'email'    => $request->email,
                      // 'subject'  => $request->subject,
                      'message'  => $request->message);
  
        Mail::to('info@lcc.com.ly')->send(new SendMail($data));
        return back()->with('success','Thank you for Contacting us!');
      }
  
      public function rules(){
        return [
            'firstname' => 'required',
            'email' => 'required|email',
            // 'subject' => 'required',
            'message' => 'required'
        ];
      }
}
