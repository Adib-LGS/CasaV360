<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

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
        $mails = Contact::all();
        //dd($mail);

        return view('admin.home', compact('mails'));
    }

    public function show($id) //Request $request
    {
        //if ($request->is('admin/*')) {
            //dd($request->is('admin/*'));
            $mail = Contact::findOrFail($id);
            return view('admin.message', compact('mail'));
       /* }else{
            redirect()->route('login');
        }*/

    }
}
