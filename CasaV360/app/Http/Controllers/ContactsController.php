<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactsController extends Controller
{
    public function create()
    {
        return view('pages.contacts.contact');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'subject'=>'required|min:3',
            'message' => 'required|min:10'
        ]);

        //Store data in DB
        Contact::create($request->all());

        //Using Mail Facades to send emails
        Mail::send('mail', array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'subject' => $request->get('subject'),
            'user_query' => $request->get('message'),
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to(env('ADMIN_SUPPORT_EMAIL'))->subject($request->get('subject'));
        });

        return back()->with('success', 'Nous avons bien reçus votre demande, une réponse vous sera envoyé dans les 24h');
    }
}
