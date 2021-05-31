<?php

namespace App\Http\Controllers;

use App\Models\Contact;


class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function show()
    {
        $mails = Contact::all();

        //dd($mail);

        return view('admin.home', compact('mails'));
    }
}
