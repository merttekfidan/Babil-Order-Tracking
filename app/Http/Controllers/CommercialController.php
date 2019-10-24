<?php

namespace App\Http\Controllers;

use App\Commercial;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CommercialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Commercial $commercial)
    {
        $commercials = $commercial->all();
        $today = Carbon::now();
        return view('commercials.index')->with('today', $today)
                                        ->with('commercials', $commercials);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('commercials.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $commercial = new Commercial;
        $commercial->name= $request->name;
        $commercial->price= $request->price;
        $commercial->date= date('Y-m-d', strtotime($request->date));
        $commercial->save();
        return redirect()->route('commercials.index')->with('success', " Başarılı bir şekilde reklam girildi.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Commercial  $commercial
     * @return \Illuminate\Http\Response
     */
    public function show(Commercial $commercial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Commercial  $commercial
     * @return \Illuminate\Http\Response
     */
    public function edit(Commercial $commercial)
    {
        $commercial = Commercial::findOrFail($commercial->id);
        return view('commercials.edit')->with('commercial', $commercial);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Commercial  $commercial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Commercial $commercial)
    {
        $commercial = Commercial::findOrFail($commercial->id);
        $commercial->name= $request->name;
        $commercial->price= $request->price;
        $commercial->date= date('Y-m-d', strtotime($request->date));
        $commercial->save();
        return redirect()->route('commercials.index')->with('success', " Başarılı bir şekilde reklam güncellendi.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Commercial  $commercial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Commercial $commercial)
    {
        $commercial = Commercial::findOrFail($commercial->id);
        $commercial->delete();
        return redirect()->route('commercials.index')->with('success', " Başarılı bir şekilde reklam silindi.");
    }
}
