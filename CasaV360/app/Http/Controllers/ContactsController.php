<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function create()
    {
        return view('pages.contacts.contact');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:5',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'subject'=>'required|min:3',
            'message' => 'required|min:10'
        ]);

        Contact::create($request->all());

        return back()->with('success', 'Nous avons bien reçus votre demande, une réponse vous sera envoyé dans les 24h');
    }
}
