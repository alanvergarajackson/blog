<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Curso;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model =Curso::class;
    public function definition()
    {
        return [
            'name'=> fake()->sentence(),
            'descripcion'=> fake()->paragraph(), 
            'categoria'=>  fake()->randomElement(['Desarrollo Web','Diseño web'])
        ];
    }
}
