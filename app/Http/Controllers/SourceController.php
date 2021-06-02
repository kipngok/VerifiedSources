<?php

namespace App\Http\Controllers;

use App\Models\Source;
use Illuminate\Http\Request;

class SourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sources=Source::all();
        $contacts=Contact::all();
        $sourcefields=SourceField::all();
        return view('source.index',compact('contacts','sourcefields','sources'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $contacts=Contact::all();
        $sourcefields=SourceField::all();
        return view('source.create',compact('contacts','sourcefields',));
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
        $input=$request->all();
        $source=Source::create($input);
        return redirect('/source/'.$source->$id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Source  $source
     * @return \Illuminate\Http\Response
     */
    public function show(Source $source)
    {
        //
        $sources=Source::all();
        $contacts=Contact::all();
        $sourcefields=SourceField::all();
        return view('source.show',compact('contacts','sourcefields','sources'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Source  $source
     * @return \Illuminate\Http\Response
     */
    public function edit(Source $source)
    {
        //
        $sources=Source::all();
        $contacts=Contact::all();
        $sourcefields=SourceField::all();
        return view('source.edit',compact('contacts','sourcefields','sources'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Source  $source
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Source $source)
    {
        //
        $input=$request->all();
        $source->update($input);
        return redirect('source/'.$source->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Source  $source
     * @return \Illuminate\Http\Response
     */
    public function destroy(Source $source)
    {
        //
        $source->delete();
        return redirect('/source');
    }
}
