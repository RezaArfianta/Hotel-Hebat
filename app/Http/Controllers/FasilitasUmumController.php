<?php

namespace App\Http\Controllers;

use App\Models\FasilitasUmum;
use Illuminate\Http\Request;

class FasilitasUmumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fasilitasumums = FasilitasUmum::latest()->paginate(5);
    
        return view('fasilitasumums.index',compact('fasilitasumums'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FasilitasUmum  $fasilitasUmum
     * @return \Illuminate\Http\Response
     */
    public function show(FasilitasUmum $fasilitasUmum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FasilitasUmum  $fasilitasUmum
     * @return \Illuminate\Http\Response
     */
    public function edit(FasilitasUmum $fasilitasUmum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FasilitasUmum  $fasilitasUmum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FasilitasUmum $fasilitasUmum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FasilitasUmum  $fasilitasUmum
     * @return \Illuminate\Http\Response
     */
    public function destroy(FasilitasUmum $fasilitasUmum)
    {
        //
    }
}
