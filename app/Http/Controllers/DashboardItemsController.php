<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Category;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class DashboardItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('admin.items.index', [
        'items' => Item::all()
       ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $item = Item::all();
        $q = DB::table('items')->select(DB::raw('MAX(RIGHT(kode,3)) as code'));
        $kd="";
        if($q->count()>0)
            {
            foreach($q->get() as $k)
                {
                    $tmp = ((int)$k->code)+1;
                    $kd = sprintf("%03s", $tmp);
                }
            }
        else
        {
            $kd = "001";
        }


        return view('admin.items.create', compact('item','kd'), [
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
        $validateData = $request->validate([
            'kode' => 'required|unique:items',
            'nama' => 'required|max:255',
            'slug' => 'required|unique:items',
            'category_id' => 'required',
            'stok' => 'required',
            'harga' => 'required',
            'gambar' => 'image|file|max:3072',
        ]);

        if ($request->file('gambar')) {
            $validateData['gambar'] = $request->file('gambar')->store('post-gambar');
        }

        Item::create($validateData);

        return redirect('/items')->with('success', 'Post created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        return view('admin.items.edit', [
            'item' => $item,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        $rules = [
            'nama' => 'required|max:255',
            'category_id' => 'required',
            'stok' => 'required',
            'harga' => 'required',
            'gambar' => 'image|file|max:3072',
        ];

        if ($request->kode != $item->kode) {
            $rules['kode'] = 'required|unique:items';
        }
        if ($request->slug != $item->slug) {
            $rules['slug'] = 'required|unique:items';
        }

        $validateData = request()->validate($rules);

        if ($request->file('gambar')) {
            if ($request->oldGambar) {
                Storage::delete($request->oldGambar);
            }
            $validateData['gambar'] = $request->file('gambar')->store('post-gambar');
        }


        Item::where('id', $item->id)->update($validateData);

        return redirect('/items')->with('success', 'Post Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        if ($item->image) {
            Storage::delete($item->image);
        }
        Item::destroy($item->id);

        return redirect('/items')->with('success', 'Item has been deleted!');
    }
    public function checkSLug(Request $request)
    {
        $slug = SlugService::createSlug(Item::class, 'slug', $request->nama);
        return response()->json(['slug' => $slug]);
    }
}
