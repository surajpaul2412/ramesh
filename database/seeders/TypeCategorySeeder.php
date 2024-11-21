<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Seed types
        $types = ['Male', 'Female', 'Kids'];
        foreach ($types as $type) {
            Type::create(['name' => $type]);
        }

        // Seed categories
        $categories = ['Rings', 'Bangles', 'Necklaces', 'Bracelets'];
        foreach ($categories as $category) {
            Category::create(['name' => $category]);
        }
    }
}
