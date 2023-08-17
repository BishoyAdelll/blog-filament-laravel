<?php

namespace Database\Factories;

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
        $title=fake()->realText(50);
        return [
            'title'=>$title,
            'slug'=>Str::slug($title),
            'thumbnail'=>fake()->imageUrl,
            'bannerImage'=>fake()->imageUrl,
            'sort'=>fake()->realText(30),
            'client'=>fake()->realText(30),
            'body'=>fake()->realText(40),
            'active'=>fake()->boolean,
            'published_at'=>fake()->dateTime,
            'gjs_data'=>fake()->realText(50),
            'user_id'=>1,
        ];
    }
}
