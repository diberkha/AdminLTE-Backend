<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agama;
use App\Models\Pegawai;
use App\Models\JenisPegawai;
use App\Models\StatusPegawai;
use App\Models\Pendidikan;
use App\Models\JenisKelamin;


class PegawaiController extends Controller
{
    /*
     * Display a listing of the resource.
     */
    public function index()
    {
        $pegawais = Pegawai::all();
        return view('adminlte.table-pegawai', compact('pegawais'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $agamas = Agama::all();
        $jenis_pegawai = JenisPegawai::all();
        $status_pegawai = StatusPegawai::all();
        $pendidikan = Pendidikan::all();
        $jenis_kelamin = JenisKelamin::all();
        return view('adminlte.form-pegawai', compact('agamas', 'jenis_pegawai', 'status_pegawai', 'pendidikan', 'jenis_kelamin'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate ([
            'nama' => 'required',
            'nik' => 'required',
            'jenis_pegawai' => 'required',
            'status_pegawai' => 'required',
            'unit' => 'required',
            'sub_unit' => 'required',
            'pendidikan' => 'required',
            'tanggal_lahir' => 'required',
            'tempat_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambarName = time() . '_' . $gambar->getClientOriginalName();
            $gambar->move('upload/', $gambarName);

        $pegawai = new Pegawai;
        $pegawai->nama = $request->nama;
        $pegawai->nik = $request->nik;
        $pegawai->jenis_pegawai = $request->jenis_pegawai;
        $pegawai->status_pegawai = $request->status_pegawai;
        $pegawai->unit = $request->unit;
        $pegawai->sub_unit = $request->sub_unit;
        $pegawai->pendidikan = $request->pendidikan;
        $pegawai->tanggal_lahir = $request->tanggal_lahir;
        $pegawai->tempat_lahir = $request->tempat_lahir;
        $pegawai->jenis_kelamin = $request->jenis_kelamin;
        $pegawai->agama = $request->agama;
        $pegawai->gambar = $gambarName;
        $pegawai->save();
        return redirect('/pegawai');
    }}

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
        $pegawai = Pegawai::find($id);
        $agamas = Agama::all();
        $jenis_pegawai = JenisPegawai::all();
        $status_pegawai = StatusPegawai::all();
        $pendidikan = Pendidikan::all();
        $jenis_kelamin = JenisKelamin::all();
        return view('adminlte.edit-pegawai', compact('agamas', 'pegawai', 'jenis_pegawai', 'status_pegawai', 'pendidikan', 'jenis_kelamin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate ([
            'nama' => 'required',
            'nik' => 'required',
            'jenis_pegawai' => 'required',
            'status_pegawai' => 'required',
            'unit' => 'required',
            'sub_unit' => 'required',
            'pendidikan' => 'required',
            'tanggal_lahir' => 'required',
            'tempat_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $pegawai = Pegawai::find($id);
        $pegawai->nama = $request->nama;
        $pegawai->nik = $request->nik;
        $pegawai->jenis_pegawai = $request->jenis_pegawai;
        $pegawai->status_pegawai = $request->status_pegawai;
        $pegawai->unit = $request->unit;
        $pegawai->sub_unit = $request->sub_unit;
        $pegawai->pendidikan = $request->pendidikan;
        $pegawai->tanggal_lahir = $request->tanggal_lahir;
        $pegawai->tempat_lahir = $request->tempat_lahir;
        $pegawai->jenis_kelamin = $request->jenis_kelamin;
        $pegawai->agama = $request->agama;

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambarName = time() . '_' . $gambar->getClientOriginalName();
            $gambar->move('upload/', $gambarName);
            $pegawai->gambar = $gambarName; // Simpan nama file gambar
        }

        $pegawai->save();
        return redirect('/pegawai');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pegawai = Pegawai::find($id);

        if ($pegawai->gambar){
            unlink('upload/'.$pegawai->gambar);
        }
        
        $pegawai->delete();
        return redirect('/pegawai');
    }
}
