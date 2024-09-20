<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            // 'author' => fake()->name(),
            'author_id' => User::factory(),
            'category_id' => Category::factory(),
            'slug' => Str::slug(fake()->sentence()),
            'body' => fake()->text(),
        ];
    }

   // $categories = Category::factory(3)->create();
//    $users = User::factory(5)->create();
    //Post::factory(10)->create(['category_id' => $categories->random()->id, 'author_id' => $users->random()->id, ]);
    // App\Models\Post::factory(100)->recycler([Category::factory(3)->create(), User::factory(5)->create()])->create();   
//         //App\Models\Post::factory(100)->recycle([Category::factory(3)->cretae(), User::factory(5)->create()])->create();
    
}

