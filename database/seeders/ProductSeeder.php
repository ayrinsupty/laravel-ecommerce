<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Brand;
use App\Models\Category;
use App\Models\ProductImage;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $category = Category::first(); // Fetch the first category
        $brand = Brand::first(); // Fetch the first brand

        if ($category && $brand) {
            for ($i = 1; $i <= 10; $i++) {
                Product::create([
                    'category_id' => $category->id,
                    'name' => "Sample Product $i",
                    'slug' => "sample-product-$i",
                    'brand' => $brand->name, // Use the fetched brand name
                    'small_description' => "This is a small description of product $i.",
                    'description' => "This is a sample product description for product $i.",
                    'original_price' => rand(20, 50),
                    'selling_price' => rand(10, 30),
                    'quantity' => rand(10, 100),
                    'trending' => rand(0, 1),
                    'featured' => rand(0, 1),
                    'meta_title' => "Sample Product $i",
                    'meta_keyword' => "sample, product, example",
                    'meta_description' => "This is a sample product for demonstration purposes for product $i.",
                ]);
            }
        } else {
            echo "No categories or brands found. Please seed the categories and brands tables first.";
        }
    }
}