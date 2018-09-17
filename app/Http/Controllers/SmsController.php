<?php

namespace App\Http\Controllers;

use Nexmo;
use App\Contact;
use Illuminate\Http\Request;

class SmsController extends Controller
{
	public function __construct()
    {
        $this->middleware('guest');
    }
    
    public function SendSMS(Request $request){
    	$contacts = Contact::all();

    	foreach ($contacts as $contact) {
    		Nexmo::message()->send([
			    'to'   => $contact->phone_number,
			    'from' => '16105552344',
			    'text' => $request->message
			]);
    	}
    	

		return redirect()->route('home');
    }
}
