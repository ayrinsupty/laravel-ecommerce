<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email','supty@gmail.com')->first();
        if (is_null($user)) {

            $user = new User();
            $user->name = "Supty";
            $user->email = "supty@gmail.com";
            $user->password = Hash::make('12345678');
            $user->save();
        }

    }
}

