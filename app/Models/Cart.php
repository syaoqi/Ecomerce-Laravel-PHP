<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Cart extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(user::class, 'user_id');
    }

    public function item()
    {
        return $this->belongsTo(item::class, 'item_id');
    }

    public static function countUserCart()
    {
        $cart = Cart::where("user_id", Auth::user()->id)->count();
        return $cart;
    }
}
