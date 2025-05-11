<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Slider;

class SliderSeeder extends Seeder
{
    public function run()
    {
        Slider::create([
            'title' => 'Welcome to EShop',
            'description' => 'Discover the best products at unbeatable prices.',
            'image' => 'uploads/slider/slider1.jpg', // Ensure this path exists
            'status' => 1,
        ]);

        Slider::create([
            'title' => 'Shop the Latest Trends',
            'description' => 'Find the latest arrivals in our collection.',
            'image' => 'uploads/slider/slider2.jpg', // Ensure this path exists
            'status' => 1,
        ]);
    }
}