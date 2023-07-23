<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class jobsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            ////title,tags,location,company,description,email,website
            'title' => $this->faker->sentence(),
            'tags' => 'PHP, Laravel, Database',
            'location' => $this->faker->city(),
            'company' => $this->faker->company(),
            'description' => $this->faker->paragraph(),
            'email' => $this->faker->email(),
            'website' => $this->faker->url(),
            
        ];
    }
}