<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
class MailController extends Controller
{
    public function sendemail(Request $request){


    Mail::raw($request->input('message') , function($message) {

        $message->to('gunelibrahimkalilova@gmail.com', 'Online Education')->subject('SIKAYET&TEKLIFLER');
        $message->from($_POST['email'],$_POST['name']);

    });

   echo   "Basic Email Sent. Check your inbox.";
}


}
