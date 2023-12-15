<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendidikan;

class PendidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pendidikan = Pendidikan::all();
        return view('pendidikan.table', compact('pendidikan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pendidikan.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate ([
            'nama' => 'required'
        ]);

        $pendidikan = new Pendidikan;
        $pendidikan->nama = $request->nama;
        $pendidikan->save();
        return redirect('/pendidikan');
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
        $pendidikan = Pendidikan::find($id);
        return view('pendidikan.edit', compact('pendidikan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pendidikan = Pendidikan::find($id);
        $pendidikan->nama = $request->nama;
        $pendidikan->save();
        return redirect('/pendidikan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pendidikan = Pendidikan::find($id);
        $pendidikan->delete();
        return redirect('/pendidikan');
    }
}
