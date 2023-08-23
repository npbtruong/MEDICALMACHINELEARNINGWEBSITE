<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Feedback;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

use Exception;
use App\Mail\MailNotify;
use Illuminate\Support\Facades\Mail as FacadesMail;

class SampleController extends Controller
{
    function index()
    {
        return view('login');
    }

    function request()
    {
        return view('email');
    }

    function validate_request(Request $request)
    {
        $request->validate([
            'email' =>  'required',
        ]);

        $validator = Validator::make($request->all(), [
        'email' => 'required|exists:users',
        ]);

        $data = $request->all();
        $youremail = $data['email'];

        if ($validator->fails()) { 
            return redirect('request')->with('success', 'Email details are not valid!!');
         } 
         else { 

            $mydata = [
                "subject"=>"Deploy Your Ai",
                "body"=>$data['email'],
                ];
            
            
            try
            {
              FacadesMail::to($youremail)->send(new MailNotify($mydata));
              return redirect('login')->with('success', 'Success! , Please check your Spam Box In Email and Change your Password!');
            }
            catch(Exception $e)
            {
              return response()->json(['Sorry! Please try again latter']);
            }


         }
        

        return redirect('request')->with('success', 'Email details are not valid');
    }

    public function reset(){
        return view('reset');
    }
    
    public function resetdirect($id)
    {
        return redirect('reset')->with('successx', $id);
    }

    function validate_reset(Request $request)
    {
        {
            $request->validate([
                'email' => 'required',
                'password'     =>   'required|min:6'
            ]);
    
            $data = $request->all();
            User::where('email',$data['email']) -> first()->update([
                'password' => Hash::make($data['password'])
            ]);
    
            return redirect('login')->with('success', 'Change Password Completed, now you can login');
        }
    }

    function registration()
    {
        return view('registration');
    }

    function validate_registration(Request $request)
    {
        $request->validate([
            'name'         =>   'required',

            'positions'    =>   'required',

            'email'        =>   'required|email|unique:users',
            'password'     =>   'required|min:6'
        ]);

        $data = $request->all();

        User::create([
            'name'  =>  $data['name'],
            'email' =>  $data['email'],
            'positions' =>  $data['positions'],
            'password' => Hash::make($data['password'])
        ]);

        return redirect('login')->with('success', 'Registration Completed, now you can login');
    }

    function validate_login(Request $request)
    {
        $request->validate([
            'email' =>  'required',
            'password'  =>  'required'
        ]);

        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials))
        {

            return redirect('dashboard');
            
        }

        return redirect('login')->with('success', 'Login details are not valid');
    }

    function dashboard()
    {
        if(Auth::check())
        {
            if(Auth::user()->email == 'trasublai@gmail.com' || Auth::user()->email == 'npbtruong@gmail.com'){
            return view('admindash');
            }
            else{
            return view('dashboard');  
            }
        }

        return redirect('login')->with('success', 'you are not allowed to access');
    }

    

    function logout()
    {
        Session::flush();

        Auth::logout();

        return Redirect('login');
    }

    public function remove($id){
       
        $user = User::find($id);
        $user->delete();
        
        return redirect('/dashboard#/blog')->with('success', 'Delete user success!!');
        
    }

    public function deletefb($id){
       
        $user = Feedback::find($id);
        $user->delete();
        
        
        return back();
        
    }


    function feedback_table(Request $request)
    {
        
        $data = $request->all();

        Feedback::create([
            'feedbacktext'  =>  $data['feedbacktext'],
            'feedbackimg' =>  $data['feedbackimg'],
            'email' =>  $data['email'],
        ]);

        return redirect('/dashboard#/viemphoi');
    }


    function enterfeedback()
    {
        if(Auth::check())
        {

            return view('enterfeedback');
            
        }
        return redirect('login');
    }

   

    function validate_feedback(Request $request)
    {
        
        $data = $request->all();

        Feedback::create([
            'email'  =>  $data['email'],
            'feedbackimg' =>  $data['file'],
            'bounding' =>  $data['bounding'],
            'size' =>  $data['size'],
        ]);

        return redirect('/dashboard#/viemphoi');
    }
}
