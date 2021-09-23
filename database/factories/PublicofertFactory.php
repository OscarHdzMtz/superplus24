<?php

namespace Database\Factories;

use App\Models\publicofert;
use Illuminate\Database\Eloquent\Factories\Factory;

class PublicofertFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = publicofert::class;

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
            'texto'=>$this->faker->randomElement(['esto es promo', 'es oytra promo']),                        
            'image'=>$this->faker->randomElement(['anturell.png', 'corona.jpg', 'electr.png', '1.png', 'brill.png']),
            'fechaInicio'=>$this->faker->randomElement(['2021-09-24', '2021-09-23', '2021-09-21','2021-09-20',]),
            'fechaFin'=>$this->faker->randomElement(['2021-09-29', '2021-09-30', '2021-09-28','2021-09-27',]),
        ];
    }
}
