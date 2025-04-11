<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

use App\Models\Categoria;
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produto>
 */
class ProdutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nome = $this->faker->unique()->sentence();
        return [
            'NomeProduto' => $nome,
            'Imagem' => $this->faker->imageUrl(400,400),
            'Descricao' => $this->faker->paragraph(),
            'Preco' => $this->faker->randomNumber(2),
            'slug' => Str::slug($nome),
            'id_user' => User::pluck('id')->random(),
            'id_categoria' => Categoria::pluck('id')->random(),

        ];
    }
}
