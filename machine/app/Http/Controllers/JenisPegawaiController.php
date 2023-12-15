<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisPegawai;

class JenisPegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jenis_pegawai = JenisPegawai::all();
        return view('jenispegawai.table', compact('jenis_pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jenispegawai.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate ([
            'nama' => 'required'
        ]);

        $jenis_pegawai = new JenisPegawai;
        $jenis_pegawai->nama = $request->nama;
        $jenis_pegawai->save();
        return redirect('/jenispegawai');
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
        $jenis_pegawai = JenisPegawai::find($id);
        return view('jenispegawai.edit', compact('jenis_pegawai'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $jenis_pegawai = JenisPegawai::find($id);
        $jenis_pegawai->nama = $request->nama;
        $jenis_pegawai->save();
        return redirect('/jenispegawai');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $jenis_pegawai = JenisPegawai::find($id);
        $jenis_pegawai->delete();
        return redirect('/jenispegawai');
    }
}
