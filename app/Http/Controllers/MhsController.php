<?php

namespace App\Http\Controllers;

class MhsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function showAllMahasiswa()
    {
    return response()->json(Mahasiswa::all());
    }
    public function showStatusPembayaran()
    {
    return response()->json(Mahasiswa::where('code_pembayaran',0)->orderBy('nama_Mahasiswa')->get());
    }
    
    public function create(Request $request)
    {
    $mahasiswa = Mahasiswa::create($request->all());
    return response()->json($mahasiswa, 201);
    }
    public function update($id, Request $request)
    {
    $mahasiswa = Mahasiswa::findOrFail($id);
    $mahasiswa->update($request->all());
    return response()->json($mahasiswa, 200);
    }
    public function delete($id)
    {
    Mahasiswa::findOrFail($id)->delete();
    return response('Deleted Successfully', 200);
    }

    //
}
