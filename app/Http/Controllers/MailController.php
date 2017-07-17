<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Mail;
class MailController extends Controller
{
    public function sendemail(Request $request){


       $contact=new Contact();
       $contact->name  = $request->name;
       $contact->email =$request->email;
       $contact->text  =$request->message;
       $contact->save();

    Mail::raw($request->input('message') , function($message) {

        $message->to('info@onlayn-tehsil.com', 'Online Education')->subject('SIKAYET&TEKLIFLER');
        $message->from($_POST['email'],$_POST['name']);

    });

   echo   "Basic Email Sent. Check your inbox.";
}


}
