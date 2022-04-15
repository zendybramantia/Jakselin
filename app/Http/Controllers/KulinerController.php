<?php

namespace App\Http\Controllers;

use App\Models\WisataKuliner;
use Illuminate\Http\Request;


class KulinerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tambahKuliner');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('kuliner/tambah');
        
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
        try {
            $this->validate($request, [
                'category_id' => "required",
                'nama_tempat' => "required",
                'alamat' => 'required',
                'deskripsi' => 'required|max:2056',
                'gambar' => "required"
            ]);

            WisataKuliner::create([
                'category_id' => $request->category_id,
                'nama_tempat' => $request->nama_tempat,
                'alamat' => $request->alamat,
                'deskripsi' => $request->deskripsi,
                'gambar' => $request->gambar
            ]);
            return response("Sukses", 200);
        } catch (\Illuminate\Validation\ValidationException $e) {
            dd($e);
            return response("form yang diisi tidak valid", 400);
        } catch (\Exception $e) {
            dd($e);
            return response("Internal Server Error", 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WisataKuliner  $wisataKuliner
     * @return \Illuminate\Http\Response
     */
    public function show(WisataKuliner $wisataKuliner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WisataKuliner  $wisataKuliner
     * @return \Illuminate\Http\Response
     */
    public function edit(WisataKuliner $wisataKuliner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WisataKuliner  $wisataKuliner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WisataKuliner $wisataKuliner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WisataKuliner  $wisataKuliner
     * @return \Illuminate\Http\Response
     */
    public function destroy(WisataKuliner $wisataKuliner)
    {
        //
    }
}
