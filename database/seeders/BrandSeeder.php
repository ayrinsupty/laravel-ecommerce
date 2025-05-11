<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Brand;
use App\Models\Category;

class BrandSeeder extends Seeder
{
    public function run()
    {
        $category = Category::first(); // Fetch the first category
        if ($category) {
            Brand::create([
                'name' => 'Brand A',
                'slug' => 'brand-a',
                'status' => 1,
                'category_id' => $category->id, // Provide a valid category_id
            ]);

            Brand::create([
                'name' => 'Brand B',
                'slug' => 'brand-b',
                'status' => 1,
                'category_id' => $category->id, // Provide a valid category_id
            ]);
        } else {
            echo "No categories found. Please seed the categories table first.";
        }
    }
}