<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use Illuminate\Http\Request;

class KamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kamars = Kamar::latest()->paginate(10);
        return view('kamars.index',compact('kamars'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kamars.create');
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
            'tipe_kamar' => 'required',
            'jumlah_kamar' => 'required',
        ]);

        Kamar::create($request->all());
     
        return redirect()->route('kamars.index')
                        ->with('success','Berhasil Menyimpan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kamar  $kamar
     * @return \Illuminate\Http\Response
     */
    public function show(Kamar $kamar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kamar  $kamar
     * @return \Illuminate\Http\Response
     */
    public function edit(Kamar $kamar)
    {
        return view('kamars.edit',compact('kamar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kamar  $kamar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kamar $kamar)
    {
        $request->validate([
            'tipe_kamar' => 'required',
            'jumlah_kamar' => 'required',
        ]);

        $kamar->update($request->all());

        return redirect()->route('kamars.index')
        ->with('success','Berhasil Update !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kamar  $kamar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kamar $kamar)
    {
        $kamar->delete();
     
        return redirect()->route('kamars.index')
                        ->with('success','Berhasil Hapus !');
    }
}
