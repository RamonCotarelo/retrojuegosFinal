<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Str;

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
    public function definition()
    {

        $name = $this->faker->unique()->sentence();


        return [
            //
            'name' =>$name, 
            'slug' =>Str::slug($name),
            'contacto'=>$this->faker->text(10),
            'descripcion'=>$this->faker->text(50),
            'status' =>$this->faker->randomElement([1,2]),
            'category_id' => Category::all()->random()->id,
            'user_id' => Category::all()->random()->id

        ];  
    }
}
