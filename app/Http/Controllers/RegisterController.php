<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\ImagesPage;

use Response;

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

    function images(Request $request) {
        $imageRow = $request->input('form_data');

        if(is_array($imageRow)) {
            ImagesPage::create([
                'image_url' => $imageRow['imgUrl'],
                'image_caption' => $imageRow['imgCaption'],
                'image_blurb' => $imageRow['imgBlurb'],
            ]);

            return Response::json([
                'data' => $imageRow,
            ]);
        }
    }

    function fetchAllImageRows() {
        $imagesPage = ImagesPage::all();
        $imageRow = [];

        if(count($imagesPage) > 0) {
            foreach($imagesPage as $imagesRow) {
                $imageRow[] = [
                    'imgUrl' => $imagesRow->image_url,
                    'imgCaption' => $imagesRow->image_caption,
                    'imgBlurb' => $imagesRow->image_blurb
                ];
            }
        } else {
            $imageRow = [
                'imgUrl' => '',
                'imgCaption' => '',
                'imgBlurb' => ''
            ];
        }

        return Response::json([
            'data' => $imageRow,
        ]);
    }
}
