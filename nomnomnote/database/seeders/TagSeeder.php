<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $products = Product::all();

        Tag::factory(20)->create()->each(function ($tag) use ($products) {
            $tag->products()->attach(
                $products->random(rand(1, 3))->pluck('id')->toArray()
            );
        });
    }
}
