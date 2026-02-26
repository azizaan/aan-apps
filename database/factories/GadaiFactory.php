<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Gadai;

class GadaiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Gadai::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'item' => $this->faker->word(),
            'value' => $this->faker->numberBetween(100000, 1000000),
            'start_date' => $this->faker->date(),
        ];
    }
}
