<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\City;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = Contact::all();
        $city = City::all();
        $contactCount = Contact::count(); // Count contacts

        return view('contact.index', compact('contact','city','contactCount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $city = City::all();
        return view('contact.create', compact('city'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name'=>'required',
            'last_name'=> 'required',
            'cell_phone' => 'required|integer',
            'email' => 'required',
            'city' => 'required'
          ]);
        $contact = new Contact([
            'first_name' => $request->get('first_name'),
            'last_name'=> $request->get('last_name'),
            'cell_phone'=> $request->get('cell_phone'),
            'email'=> $request->get('email'),
            'city'=> $request->get('city')
          ]);
        $contact->save();
        return redirect('/contact')->with('success', 'Contact has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = Contact::find($id);
        $city = City::all();

        return view('contact.edit', compact('contact','city'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'first_name'=>'required',
            'last_name'=> 'required',
            'cell_phone' => 'required|integer',
            'email' => 'required',
            'city' => 'required'
          ]);

          $contact = Contact::find($id);
          $contact->first_name = $request->get('first_name');
          $contact->last_name = $request->get('last_name');
          $contact->cell_phone = $request->get('cell_phone');
          $contact->email = $request->get('email');
          $contact->city = $request->get('city');
          $contact->save();

          return redirect('/contact')->with('success', 'Contact information has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = Contact::find($id);
        $contact->delete();

        return redirect('/contact')->with('success', 'Contact has been deleted Successfully!');
    }
}
