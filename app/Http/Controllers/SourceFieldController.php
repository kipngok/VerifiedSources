<?php

namespace App\Http\Controllers;

use App\Models\SourceField;
use Illuminate\Http\Request;

class SourceFieldController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //source field
        $sources=Source::all();
        $fields=Field::all();
        return view('sourceField.index',compact('sources','fields'));
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
        $fields=Field::all();
        return view('sourceField.create',compact('sources','fields'));
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
        $sourceField=SourceField::create($input);
        return redirect('/source/'.$sourceField->source_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SourceField  $sourceField
     * @return \Illuminate\Http\Response
     */
    public function show(SourceField $sourceField)
    {
        //
         $sources=Source::all();
        $fields=Field::all();
        return view('sourceField.show',compact('sources','fields'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SourceField  $sourceField
     * @return \Illuminate\Http\Response
     */
    public function edit(SourceField $sourceField)
    {
        //
         $sources=Source::all();
        $fields=Field::all();
        return view('sourceField.edit',compact('sources','fields'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SourceField  $sourceField
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SourceField $sourceField)
    {
        //
        $input=$request->all();
        $sourcefield->update($input);
        return redirect('sourceField/'.$sourceField->$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SourceField  $sourceField
     * @return \Illuminate\Http\Response
     */
    public function destroy(SourceField $sourceField)
    {
        //
        $source_id=$sourceField->source_id;
        $sourceField->delete();
        return redirect('/source/'.$source_id);
    }
}
