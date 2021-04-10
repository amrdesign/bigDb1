<?php

namespace Database\Factories;

use App\Models\Employees;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EmployeesFactory extends Factory
{
    protected $model = Employees::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'username' => $this->faker->userName,
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,

        ];
    }
}
