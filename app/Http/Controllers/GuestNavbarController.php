<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class GuestNavbarController extends Controller
{
    public function index()
    {
        return view('layouts.partials.guest._navbar', [
            'categories' => Category::all()
            // 'active' => 'categor'
        ]);
    }
}

