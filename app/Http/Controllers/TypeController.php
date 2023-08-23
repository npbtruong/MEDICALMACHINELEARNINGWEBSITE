<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

use App\Models\Feedback;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class TypeController extends Controller
{
    //
    public function saveCanvas(Request $request) {
        $current = Carbon::now('Asia/Ho_Chi_Minh')->format('d-m-Y_H-i-s');

        $user = Auth::user()->email;
        $image = $request->get('imgBase64');
        // $generatedImageName = 'z_'.$user.'__'.$current.'_y'.$request->get('imgName');
        // $image->save(public_path('images/'.$generatedImageName));

        Feedback::create([
            'email'  => $user,
            'feedbackimg' =>  $image,
        ]);
    }
    
}
