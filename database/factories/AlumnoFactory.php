<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Alumno;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\alumno>
 */
class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     /*
     
     */
    protected $model=Alumno::class;
    public function definition(): array
    {
        return [
            //
            'nombre'=>$this->faker->firstName,
            'apellido'=>$this->faker->lastName,
            'email'=>$this->faker->unique->safeEmail,
            //'edad'=>$this->faker->number se coloca solo el number para no especificar rango
            'edad'=>$this->faker->numberBetween(18,30)
            
        ];
    }
}
