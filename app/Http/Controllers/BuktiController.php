<?php

namespace App\Http\Controllers;

use App\Models\Bukti;
use Illuminate\Http\Request;

class BuktiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buktis = Bukti::latest()->paginate(1);
        return view('buktis.index',compact('buktis'))
            ->with('i', (request()->input('page', 1) - 1) * 1);
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
     * @param  \App\Models\Bukti  $bukti
     * @return \Illuminate\Http\Response
     */
    public function show(Bukti $bukti)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bukti  $bukti
     * @return \Illuminate\Http\Response
     */
    public function edit(Bukti $bukti)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bukti  $bukti
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bukti $bukti)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bukti  $bukti
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bukti $bukti)
    {
        //
    }
}
