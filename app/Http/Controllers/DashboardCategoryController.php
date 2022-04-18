<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\WisataKuliner;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class DashboardCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('admin');
        return view('Dashboard.categories.index', [
            'categories' => Category::all(),
            'wisata' => WisataKuliner::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Dashboard.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validData = $request->validate([
            'name' => 'required',
        ]);

        Category::create($validData);

        return redirect('/dashboard/categories')->with('success', 'Registrasi '.$request->name.' berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        // return $category->wisatakuliner;
        return view('Dashboard.categories.show', [
        'wisatas' => $category->wisatakuliner,
        'category' => $category
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('Dashboard.categories.edit', [
            'category' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        try {
            $data = $category;
            $this->validate($request, [
                'name' => "required",
            ]);

            $categoryUpdate = Category::where('id', $data->id)->first();
                
            $categoryUpdate->update([
                "name" => $request->name,
            ]);
            
            $categoryUpdate->save();
            return redirect('/dashboard/categories/' . $category->id)->with('success', 'Update user berhasil');
        } catch (\Exception $e) {
            // dd($e);
            return redirect('/dashboard/categories/' . $category->id)->with('error', 'Update user gagal');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        try{
            // Category::where('id', $category->id)->delete();
            Category::find($category->id)->delete();
            // Category::deleting(Category::where('id', $category->id));
        } catch (\Exception $e) {
            dd($e);
        }
        return redirect('/dashboard/categories')->with('success', 'Category '. $category->name . ' berhasil dihapus');  
    }
}
