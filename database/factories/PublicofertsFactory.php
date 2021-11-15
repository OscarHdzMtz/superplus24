<?php

namespace Database\Factories;

use App\Models\Publicoferts;
use Illuminate\Database\Eloquent\Factories\Factory;

class PublicofertsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Publicoferts::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'user_id' => '1',
            'titulo'=>$this->faker->name(),
            'texto'=>$this->faker->randomElement(['esto es promo', 'esto es una prueba']),                        
            'image'=>$this->faker->randomElement(['1.png', 'promo2.png', 'jarritos.png', 'premier.png', 'paleta.png', 'vive100.png']),
            'fechaInicio'=>$this->faker->randomElement(['2021-11-01', '2021-11-23', '2021-11-22','2021-11-11',]),
            'fechaFin'=>$this->faker->randomElement(['2021-11-29', '2021-12-30', '2021-10-28','2021-11-27',]),
            'deldia'=>$this->faker->randomElement(['0','1']),
        ];
    }
}
