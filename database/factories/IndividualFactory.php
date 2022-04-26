<?php

namespace Database\Factories;

use App\Models\Individual;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class IndividualFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Individual::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->name,
            'last_name' => $this->faker->name,
            'national_id' => rand(1,100)  *  rand(10000000, 9999999),
        ];
    }
}
