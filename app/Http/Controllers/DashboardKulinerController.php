<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Facades\File;
use App\Models\WisataKuliner;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class DashboardKulinerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('admin');
        return view('Dashboard.kuliner.index', [
            'kuliners' => WisataKuliner::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Dashboard.kuliner.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $this->validate($request, [
                'category_id' => "required",
                'nama_tempat' => "required",
                'alamat' => 'required',
                'deskripsi' => 'required|max:2056',
                'gambar' => "required|mimes:jpeg,jpg,png"
            ]);

            $url = $request->file('gambar')->store('kuliner');

             $wisataKuliner = WisataKuliner::create([
                'category_id' => $request->category_id,
                'nama_tempat' => $request->nama_tempat,
                'alamat' => $request->alamat,
                'deskripsi' => $request->deskripsi,
                'gambar' => "storage/" . $url
            ]);
            return redirect('/dashboard/kuliner/'.$wisataKuliner->id)->with('success', 'Registrasi '.$request->nama_tempat.' berhasil');
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
        // return WisataKuliner::all();
        // return $wisataKuliner;
        return view('Dashboard.kuliner.show', [
            'profil' => $wisataKuliner
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WisataKuliner  $wisataKuliner
     * @return \Illuminate\Http\Response
     */
    public function edit(WisataKuliner $wisataKuliner)
    {
        // return $wisataKuliner;
        return view('Dashboard.kuliner.edit', [
            'kuliner' => $wisataKuliner,
            'categories' => Category::all()
        ]);
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
        try {

            // $url = $request->file('gambar')->store('kuliner');

            // DB::table('wisata_kuliners')->where('id',$request->id)->update([
            //     'category_id' => $request->category_id,
            //     'nama_tempat' => $request->nama_tempat,
            //     'alamat' => $request->alamat,
            //     'deskripsi' => $request->deskripsi,
            //     'gambar' => "storage/" . $url
            // ]);

            $this->validate($request, [
                'category_id' => "required",
                'nama_tempat' => "required",
                'alamat' => 'required',
                'deskripsi' => 'required|max:2056',
                'gambar' => "mimes:jpeg,jpg,png"
            ]);

            $kulinerUpdate = WisataKuliner::where('id', $wisataKuliner->id);
            
            if ($request->hasFile("gambar")) {
                $url = $request->file('gambar')->store('kuliner');

                // File::delete($wisataKuliner->gambar);
                
                
                $kulinerUpdate->update([
                    'category_id' => $request->category_id,
                    'nama_tempat' => $request->nama_tempat,
                    'alamat' => $request->alamat,
                    'deskripsi' => $request->deskripsi,
                    'gambar' => "storage/" . $url
                ]);
                
            }else{
                
                $kulinerUpdate->update([
                    'category_id' => $request->category_id,
                    'nama_tempat' => $request->nama_tempat,
                    'alamat' => $request->alamat,
                    'deskripsi' => $request->deskripsi,
                ]);
                
            }
            // dd($kulinerUpdate);
            // dd($wisataKuliner);
            return redirect('/dashboard/kuliner/'.$wisataKuliner->id)->with('success', 'edit berhasil');
        } catch (\Exception $e) {
            dd($e);
            return redirect('/dashboard/kuliner/'.$wisataKuliner->id)->with('error', 'Edit user gagal');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WisataKuliner  $wisataKuliner
     * @return \Illuminate\Http\Response
     */
    public function destroy(WisataKuliner $wisataKuliner)
    {
        try{
            WisataKuliner::where('id', $wisataKuliner->id)->delete();
        } catch (\Exception $e) {
            dd($e);
        }
        return redirect('/dashboard/kuliner')->with('success', 'Wisata Kuliner ' . $wisataKuliner->nama_tempat .  ' berhasil dihapus');  
    }
}
