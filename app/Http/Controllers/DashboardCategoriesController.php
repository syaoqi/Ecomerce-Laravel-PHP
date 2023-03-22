<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('admin.categories.index',[
        'categories' => Category::all()
       ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required|max:255|unique:categories',
            'slug' => 'required|unique:categories',
            'gambar' => 'image|file|max:3072',
        ]);

        if ($request->file('gambar')) {
            $validateData['gambar'] = $request->file('gambar')->store('post-gambar');
        }
        Category::create($validateData);

        return redirect('/categories')->with('success', 'Post created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.categories.edit', [
            'category' => $category,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $rules = [
            'gambar' => 'image|file|max:3072',
        ];

        if ($request->nama != $category->nama) {
            $rules['nama'] = 'required|unique:categories';
        }
        if ($request->nama != $category->nama) {
            $rules['slug'] = 'required|unique:categories';
        }
        $validateData = request()->validate($rules);

        if ($request->file('gambar')) {
            if ($request->oldGambar) {
                Storage::delete($request->oldGambar);
            }
            $validateData['gambar'] = $request->file('gambar')->store('post-gambar');
        }


        Category::where('id', $category->id)->update($validateData);

        return redirect('/categories')->with('success', 'Post Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        if ($category->gambar) {
            Storage::delete($category->gambar);
        }
        Category::destroy($category->id);

        return redirect('/categories')->with('success', 'Categories has been deleted!');
    }
    public function checkSLug(Request $request)
    {
        $slug = SlugService::createSlug(Item::class, 'slug', $request->nama);
        return response()->json(['slug' => $slug]);
    }
}
