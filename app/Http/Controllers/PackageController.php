<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**'name','description','amount','time'
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $package=Package::all();
        $subscriptions=Subscriptions::all();
        return view('package.index',compact('package','subscriptions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $subscriptions=Subscriptions::all();
        return view('package.create',compact('subscriptions'));

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
        $package=Package::create($input);
        return redirect('/package/'.$package->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function show(Package $package)
    {
        //
        $packages=Package::all();
        $subscriptions=Subscriptions::all();
        return view('package.show',compact('subscriptions','packages'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function edit(Package $package)
    {
        //
        $packages=Package::all();
        $subscriptions=Subscriptions::all();
        return view('package.edit',compact('subscriptions','packages'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Package $package)
    {
        //
        $input=$request->all();
        $package->update($input);
        return redirect('package/'.$package->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function destroy(Package $package)
    {
        //
        $package->delete();
        return redirect('/package');
    }
}
