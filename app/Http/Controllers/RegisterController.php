<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegisterController extends Controller
{
    function index(Request $request) {
    	$userEmail = $request->input('emailsub');
    	//entering existing email failsafe
    	$existingUser = User::where('email', $userEmail);
    	if( !$existingUser ) {
    		$newUser = User::create([
				'email' => $userEmail
	    	]);
    	}


    	return view('welcome', ['email' => $userEmail]);
    }
    function shop() {
        $time = now();
        $formattedTime = date('m-d-Y', strtotime($time));
        return view('store', ['date' => $formattedTime]);
    }
}
