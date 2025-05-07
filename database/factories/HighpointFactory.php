<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Highpoint;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Highpoint>
 */
final class HighpointFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Highpoint::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->words(2, true),
            'state' => $this->faker->unique()->stateAbbr(),
            'elevation' => $this->faker->numberBetween(1000, 20000),
            'difficulty' => $this->faker->randomElement(['easy', 'moderate', 'challenging', 'difficult', 'extreme']),
            'description' => $this->faker->paragraph(),
            'image_path' => 'images/highpoints/default.jpg',
            'image_alt' => $this->faker->sentence(),
        ];
    }
}
