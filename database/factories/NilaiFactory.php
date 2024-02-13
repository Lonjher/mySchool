<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Nilai>
 */
class NilaiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function getNumber($min, $max)
    {
        $numbers = range($min, $max);
        shuffle($numbers);
        foreach ($numbers as $number){
           return $number;
        }
        return $numbers;
    }

    public function definition(): array
    {
        // $number = ;

        // dd(getNumber(1, 10));
        return [
            'id_mapel' => $this->getNumber(1,10),
            'nilai' => $this->faker->numberBetween(50,90),
        ];
    }
}
