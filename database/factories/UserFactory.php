<?php

namespace Database\Factories;

use App\Models\User;
use Faker\Provider\bg_BG\PhoneNumber;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => ('SuperPlus'),
            /* 'name' => $this->faker->name, */
            /* 'email' => $this->faker->unique()->safeEmail, */
            'email' => ('sistemas@gmail.com'),
            'email_verified_at' => now(),
            'celular' =>$this->faker->PhoneNumber,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }
}
