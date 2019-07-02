<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contact;
use App\City;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     // $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $contact = Contact::all();
        $city = City::all();

        return view('welcome', compact('contact','city'));
    }
}
