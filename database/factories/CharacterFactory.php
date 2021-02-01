<?php

namespace Database\Factories;

use App\Models\Character;
use Illuminate\Database\Eloquent\Factories\Factory;

class CharacterFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Character::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'episode_id' => rand(1,30),
            'name' => $this->faker->name,
            'birthday' => $this->faker->date(),
            'occupations' => json_encode([$this->faker->name,$this->faker->name]),
            'img' => null,
            'nickname' => $this->faker->name,
            'portrayed' => $this->faker->name
        ];
    }
}
