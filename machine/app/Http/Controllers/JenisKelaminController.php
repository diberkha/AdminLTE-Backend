<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisKelamin;

class JenisKelaminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jenis_kelamin = JenisKelamin::all();
        return view('jeniskelamin.table', compact('jenis_kelamin'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jeniskelamin.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate ([
            'nama' => 'required'
        ]);

        $jenis_kelamin = new JenisKelamin;
        $jenis_kelamin->nama = $request->nama;
        $jenis_kelamin->save();
        return redirect('/jeniskelamin');
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
        $jenis_kelamin = JenisKelamin::find($id);
        return view('jeniskelamin.edit', compact('jenis_kelamin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $jenis_kelamin = JenisKelamin::find($id);
        $jenis_kelamin->nama = $request->nama;
        $jenis_kelamin->save();
        return redirect('/jeniskelamin');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $jenis_kelamin = JenisKelamin::find($id);
        $jenis_kelamin->delete();
        return redirect('/jeniskelamin');
    }
}
