<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Brand;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::create([
            'name' => 'Electronics',
            'slug' => 'electronics',
            'description' => 'Latest electronic gadgets and devices.',
            'image' => 'uploads/category/electronics.jpg', // Ensure this path exists
            'meta_title' => 'Electronics - QBuy',
            'meta_keyword' => 'electronics, gadgets, devices',
            'meta_description' => 'Discover the latest electronic gadgets and devices at QBuy.',
            'status' => 1,
        ]);
    }
}