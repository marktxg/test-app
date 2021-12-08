<?php

namespace Database\Factories;

use App\Models\Topic_Tabla;
use Illuminate\Database\Eloquent\Factories\Factory;

class Topic_TablaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model= Topic_Tabla::class;
    
    public function definition()
    {
        return [
            //llenamos los campos con contenido cualquiera. sentence() - paragraph() - randomElement(['1','2'])
            'nameTopic'=>$this->faker->sentence(),
            'idCourse'=>$this->faker->randomElement([1,2]),
            'dispoTopic'=>$this->faker->randomElement([0,1]),
            'duraTopicDias'=>$this->faker->randomElement([1,2,3,4,5]),
            'direcTopic'=>$this->faker->sentence(),
            'descTopic'=>$this->faker->paragraph()
        ];
    }
}
