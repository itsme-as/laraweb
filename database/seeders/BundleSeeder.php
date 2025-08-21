<?php

namespace Database\Seeders;

use App\Models\Bundle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BundleSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Bundle::create([
            'title' => 'Theory only',
            'description' => 'You will get a full Calculus and Vector theory for learning a path of Basic Math.',
            'nomal_price' => '300.000',
            'selling_price' => '250.000',
        ]);
        
        Bundle::create([
            'title' => 'Theory with Question Bank',
            'description' => 'You will get a full Calculus and Vector theory and you can access a Question Bank for all of those..',
            'nomal_price' => '400.000',
            'selling_price' => '350.000',
        ]);

        Bundle::create([
            'title' => 'Practice only',
            'description' => 'You will get a full Calculus and Vector practices for examinations.',
            'nomal_price' => '200.000',
            'selling_price' => '175.000',
        ]);

        Bundle::create([
            'title' => 'Full Bundle',
            'description' => 'You will get a whole package of Calculus and Vector, including theory, question bank, and practices.',
            'nomal_price' => '550.000',
            'selling_price' => '500.000',
        ]);
    }
}
