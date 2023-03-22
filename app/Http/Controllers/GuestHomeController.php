<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;

class GuestHomeController extends Controller
{
    public function index(){
        return view('guest.home', [
            'categories' => Category::all(),
            'active' => 'home'
        ]);
    }
}
