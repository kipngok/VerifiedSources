<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Source;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**'source_id','type','contact'
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $contacts=Contact::all();
        $sources=Source::all();
        return view('contact.index',compact('contacts','sources'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $sources=Source::all();
        return view('contact.create',compact('sources'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate(request(),[
            'source_id'=>'required',
            'type'=>'required',
            'contact'=>'required',
        ]);

        $input=$request->all();
        $contact->Contact::create($input);
        return redirect('/contact/'.$contact->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
        $source = Source::all();
        return view('contact.view',compact('source'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
        $source =Source::all();
        return view('contact.edit',compact('source'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
        $input=$request->all();
        $contact->update($input);
        return redirect('contact/'.$contact->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
        $contact->delete();
        return redirect('/contact');
    }
}
