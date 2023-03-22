<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class GuestModal1Controller extends Controller
{
    public function index()
    {
        return view('layouts.guest', [
            'items' => Item::all()
            // 'active' => 'categor'
        ]);
    }
}
