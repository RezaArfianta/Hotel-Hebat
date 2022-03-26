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
        return view('fasilitasumums.create');
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
            'nama_umum' => 'required',
            'ket' => 'required',
        ]);

        FasilitasUmum::create($request->all());
     
        return redirect()->route('fasilitasumums.index')
                        ->with('success','Berhasil Menyimpan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FasilitasUmum  $fasilitasUmum
     * @return \Illuminate\Http\Response
     */
    public function show(FasilitasUmum $fasilitasumum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FasilitasUmum  $fasilitasUmum
     * @return \Illuminate\Http\Response
     */
    public function edit(FasilitasUmum $fasilitasumum)
    {
        return view('fasilitasumums.edit',compact('fasilitasumum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FasilitasUmum  $fasilitasUmum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FasilitasUmum $fasilitasumum)
    {
        $request->validate([
            'nama_umum' => 'required',
            'ket' => 'required',
        ]);

        $fasilitasumum->update($request->all());

        return redirect()->route('fasilitasumums.index')
        ->with('success','Berhasil Update !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FasilitasUmum  $fasilitasUmum
     * @return \Illuminate\Http\Response
     */
    public function destroy(FasilitasUmum $fasilitasumum)
    {
        $fasilitasumum->delete();
     
        return redirect()->route('fasilitasumums.index')
                        ->with('success','Berhasil Hapus !');
    }
}
