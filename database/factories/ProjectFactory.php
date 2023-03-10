<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'name' => "PRO_". fake()->text(10),
            'description' => fake()->text(),
            'deadline' => fake()->date("Y-m-d","7days"),
          
          
        ];
    }
}
