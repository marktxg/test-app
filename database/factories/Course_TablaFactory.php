<?php

namespace Database\Factories;

use App\Models\Course_Tabla;
use Illuminate\Database\Eloquent\Factories\Factory;

class Course_TablaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Course_Tabla::class;

    public function definition()
    {
        return [
            //llenamos los campos con contenido cualquiera. sentence() - paragraph() - randomElement(['1','2'])
            'nameCourse'=>$this->faker->sentence(),
            'dispoCourse'=>$this->faker->randomElement([0,1]),
            'direcCourse'=>$this->faker->sentence()
        ];
    }
}
