<?php

namespace Database\Factories;

use App\Models\Sorular;
use Illuminate\Database\Eloquent\Factories\Factory;

class SorularFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Sorular::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'quiz_id'=>rand(1,10),
            'sorular'=>$this->faker->sentence(rand(3,7)),
            'answer1'=>$this->faker->sentence(rand(1,3)),
            'answer2'=>$this->faker->sentence(rand(1,3)),
            'answer3'=>$this->faker->sentence(rand(1,3)),
            'answer4'=>$this->faker->sentence(rand(1,3)),
            'correct_answer'=>'answer'.rand(1,4)

            
        ];
    }
}
