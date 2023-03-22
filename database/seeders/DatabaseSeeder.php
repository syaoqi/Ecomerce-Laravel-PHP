<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use App\Models\Item;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        Item::factory(12)->create();
        // Category::create([
        //     'nama' => 'Topi',
        //     'slug' => 'Topi',
        // ]);
        // Category::create([
        //     'nama' => 'Baju',
        //     'slug' => 'a',
        // ]);
        // Category::create([
        //     'nama' => 'Celana',
        //     'slug' => 'b',
        // ]);
        // Category::create([
        //     'nama' => 'Sepatu',
        //     'slug' => 'c',
        // ]);
        // Category::create([
        //     'nama' => 'Kaos Kaki',
        //     'slug' => 'd',
        // ]);
        // Category::create([
        //     'nama' => 'Celana Dalam',
        //     'slug' => 'e',
        // ]);
        // Category::create([
        //     'nama' => 'Aksesoris',
        //     'slug' => 'f',
        // ]);

    }
}
