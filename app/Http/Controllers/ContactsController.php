<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function listContacts(){
    	$contacts = Contact::all();
    	return view('contacts', ['contacts' => $contacts]);
    }
}
