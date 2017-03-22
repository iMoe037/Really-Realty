<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contact;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $contact = new Contact;

        $contact->name = request('name');
        $contact->email = request('email');
        $contact->phone = request('phone');
        $contact->zip_code = request('zipCode');

        $contact->save();

        return $contact;
    }
}
