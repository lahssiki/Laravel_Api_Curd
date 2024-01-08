<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Livre;
use Faker\Generator as Faker;

class LivreFactory extends Factory
{
    /**
     * Définition du modèle associé à la Factory.
     *
     * @var string
     */
    protected $model = Livre::class;

    /**
     * Définition du tableau de création par défaut.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titre' => $this->faker->sentence,
            'auteur' => $this->faker->name,
            'description' => $this->faker->paragraph,
            'edition' => $this->faker->date,
            'prix' => $this->faker->numberBetween($min = 150, $max = 600),
        ];
    }
}
