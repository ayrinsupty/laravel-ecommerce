<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductImage;
use App\Models\Product;

class ProductImageSeeder extends Seeder
{
    public function run()
    {
        $product = Product::first(); // Fetch the first product
        if ($product) {
            ProductImage::create([
                'product_id' => $product->id,
                'image' => 'uploads/product/' . $product->id . '_image1.jpg', // Dynamic image name
            ]);

            echo "Product images seeded successfully.\n";
        } else {
            echo "No products found. Please seed the products table first.\n";
        }
    }
}