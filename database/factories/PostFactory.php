<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    protected $model = \App\Models\Post::class;

    public function definition(): array
    {
        
                // generate lat/lng around a range (example: Pakistan approx)
                $lat = $this->faker->latitude;   // random global lat
                $lng = $this->faker->longitude;  // random global lng
        
                return [
                    'title' => $this->faker->sentence(4),
                    'description' => $this->faker->paragraph,
                    'latitude' => $lat,
                    'longitude' => $lng,
                ];
            }
        
    }

