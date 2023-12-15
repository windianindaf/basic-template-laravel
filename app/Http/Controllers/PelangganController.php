<?php

namespace App\Http\Controllers;

use App\Models\Golongan;
use Illuminate\Http\Request;
use App\Models\Pelanggan;
use App\Models\User;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Pelanggan ::all();
        return view('pelanggan.index', compact('rows'));
        // //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $golongans = Golongan::all();
        $users = User::all();

        return view('pelanggan.create', compact('golongans', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Pelanggan::create([
            'gol_id' => $request->gol_id,
            'pel_no' => $request->pel_no,
            'pel_nama' => $request->pel_nama,
            'pel_alamat' => $request->pel_alamat,
            'pel_hp' => $request->pel_hp,
            'pel_ktp' => $request->pel_ktp,
            'pel_seri' => $request->pel_seri,
            'pel_meteran' => $request->pel_meteran,
            'pel_aktif' => $request->pel_aktif,
            'user_id' => $request->user_id
        ]);
        return redirect('pelanggan');
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
        $row = Pelanggan::find($id);
        $golongans = Golongan::all();
        $users = User::all();

        return view('pelanggan.edit', compact('row', 'golongans', 'users')); //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Pelanggan::findOrFail($id);

        $row->update([
            'gol_id' => $request->gol_id,
            'pel_no' => $request->pel_no,
            'pel_nama' => $request->pel_nama,
            'pel_alamat' => $request->pel_alamat,
            'pel_hp' => $request->pel_hp,
            'pel_ktp' => $request->pel_ktp,
            'pel_seri' => $request->pel_seri,
            'pel_meteran' => $request->pel_meteran,
            'pel_aktif' => $request->pel_aktif,
            'user_id' => $request->user_id
        ]);

        return redirect('pelanggan'); //
     //
    }
}
