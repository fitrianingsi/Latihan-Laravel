<?php

namespace Database\Factories;

use App\Models\Lecturer;
use App\Models\Departmen;
use Illuminate\Database\Eloquent\Factories\Factory;

class LecturerFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'departmen_id' => Departmen::inRandomOrder()->first()->id,
        ];
    }
}