<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Category::create([
            'name' => 'Web Development',
            'slug' => 'web-development',
            'color' => 'red',
        ]);

        Category::create([
            'name' => 'UI/UX Design',
            'slug' => 'ui-ux-design',
            'color' => 'blue',
        ]);

        Category::create([
            'name' => 'Business',
            'slug' => 'business',
            'color' => 'green',
        ]);

        Category::create([
            'name' => 'Marketing',
            'slug' => 'marketing',
            'color' => 'yellow',
        ]);

        Category::create([
            'name' => 'Productivity',
            'slug' => 'productivity',
            'color' => 'purple',
        ]);
    }
}
