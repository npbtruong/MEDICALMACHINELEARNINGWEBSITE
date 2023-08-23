<?php
 
namespace App\Http\Controllers;
 

use Exception;
use App\Mail\MailNotify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail as FacadesMail;

class MailController extends Controller
{
     
  public function index()
  {
    $data = [
      "subject"=>"Deploy Your Ai",
      "body"=>"Hello friends, Welcome to Deploy Your Ai Delivery!"
      ];
    // MailNotify class that is extend from Mailable class.
    try
    {
      FacadesMail::to('mrbao360@gmail.com')->send(new MailNotify($data));
      return redirect('login')->with('success', 'Success! , Please check your Email and Change your Password!');
    }
    catch(Exception $e)
    {
      return response()->json(['Sorry! Please try again latter']);
    }
  } 
}