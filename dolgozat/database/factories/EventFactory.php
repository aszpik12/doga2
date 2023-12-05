<?php

namespace Database\Factories;

use App\Models\Agencies;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date' => $this->faker->date,
            'agency_id' => Agencies::all()->random()->id,
            'limit' => $this->faker->numberBetween(10, 100),
        ];
    }
}
