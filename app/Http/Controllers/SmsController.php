<?php

namespace App\Http\Controllers;

use Nexmo;
use Illuminate\Http\Request;

class SmsController extends Controller
{
    public function SendSMS(Request $request){
    	Nexmo::message()->send([
		    'to'   => '31636572279',
		    'from' => '16105552344',
		    'text' => $request->message
		]);

		return redirect()->route('home');
    }
}
