<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContactUsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
       
        return [
             'name' => $this->faker->name(),
            'city' => $this->faker->city(),
              'email' => $this->faker->safeEmail(),
            'contact_number' => $this->faker->phoneNumber(),
              'method_of_contact' => rand(1,2),
                'time_to_call' =>  rand(1,12).":00"."-".rand(1,12).":00",
            'comment_or_question' => $this->faker->name(),
        ];
    }
}
