<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Highpoint;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $name = fake()->unique()->words(3, true);
        
        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'state' => fake()->state(),
            'elevation' => fake()->numberBetween(1000, 20000),
            'difficulty' => fake()->randomElement(['easy', 'moderate', 'challenging', 'difficult', 'extreme']),
            'description' => fake()->paragraph(),
            'image_path' => 'images/highpoints/default.jpg',
            'image_alt' => fake()->sentence(),
        ];
    }
}
