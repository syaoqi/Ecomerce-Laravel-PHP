<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Category;

class GuestAllItemsController extends Controller
{
    public function index()
    {
        $title = '';
        if (request('category')) {
            $category = Category::firstwhere('slug', request('category'));
            $title = ' in ' . $category->nama;
        }

        // if (request('author')) {
        //     $author = User::firstwhere('username', request('author'));
        //     $title = ' in ' . $author->name;
        // }

        return view('guest.product.allitems', [
            'title' => 'All Items' . $title,
            'active' => 'allitems',
            'categories' => Category::all(),
            'items' => Item::latest()->filter(request(['search', 'category']))->paginate(8)->withQueryString()
        ]);
    }
}
