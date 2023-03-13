<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sidemenu>
 */
class SidemenuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "parent_id"       => $this->faker->randomElement(["1","2","3"]),
            "title"          =>  $this->faker->unique()->sentence(),
            "url"   =>  $this->faker->url()
        ];
        
    }
}
