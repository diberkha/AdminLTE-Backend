<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StatusPegawai;

class StatusPegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $status_pegawai = StatusPegawai::all();
        return view('statuspegawai.table', compact('status_pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('statuspegawai.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate ([
            'nama' => 'required'
        ]);

        $status_pegawai = new StatusPegawai;
        $status_pegawai->nama = $request->nama;
        $status_pegawai->save();
        return redirect('/statuspegawai');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $status_pegawai = StatusPegawai::find($id);
        return view('statuspegawai.edit', compact('status_pegawai'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $status_pegawai = StatusPegawai::find($id);
        $status_pegawai->nama = $request->nama;
        $status_pegawai->save();
        return redirect('/statuspegawai');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $status_pegawai = StatusPegawai::find($id);
        $status_pegawai->delete();
        return redirect('/statuspegawai');
    }
}
