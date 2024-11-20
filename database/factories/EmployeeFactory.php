<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Employee;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->safeEmail(),
            'phone_number' => $this->faker->phoneNumber(),
            'date_of_birth' => $this->faker->date(),
            'gender' => $this->faker->randomElement(["male","female"]),
            'ic' => $this->faker->word(),
            'position' => $this->faker->word(),
            'department' => $this->faker->word(),
            'is_active' => $this->faker->boolean(),
            'address' => $this->faker->text(),
            'postcode' => $this->faker->postcode(),
            'city' => $this->faker->city(),
            'state' => $this->faker->word(),
            'info' => $this->faker->text(),
            'image' => $this->faker->word(),
        ];
    }
}
