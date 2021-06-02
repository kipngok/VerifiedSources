<?php

namespace App\Http\Controllers;

use App\Models\Source;
use Illuminate\Http\Request;

class SourceController extends Controller
{
    /**'name', 'bio', 'status', 'title', 'profile_picture'
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sources=Source::all();
        return view('source.index',compact('sources'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('source.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //'name', 'bio', 'status', 'title', 'profile_picture'
         $this->validate(request(),[
            'name'=>'required',
            'bio'=>'required',
            'status'=>'required',
            'title'=>'required',
            'profile_picture'=>'required',
        ]);
        $input=$request->all();
        $profile_picture=$request->file('profile_picture');
        if(isset($profilepicture)){
            $input['profilepicture']='storage/app/'.$request->file('profile_picture')->store('uploads');
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
        return view('source.show');
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
        return view('source.edit');
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
