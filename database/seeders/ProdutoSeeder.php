<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtos')->insert(
            [
                'nome' => 'Camiseta Polo',
                'preco'=> 100,
                'estoque' => 4,
                'categoria_id' => 1
            ]
        );
        DB::table('produtos')->insert(
            [
                'nome' => 'Calça Jeans',
                'preco'=> 120,
                'estoque' => 1,
                'categoria_id' => 1
            ]
        );
        DB::table('produtos')->insert(
            [
                'nome' => 'Camisa Manga Longa',
                'preco'=> 50,
                'estoque' => 8,
                'categoria_id' => 1
            ]
        );
        DB::table('produtos')->insert(
            [
                'nome' => 'PC GAMER',
                'preco'=> 3000,
                'estoque' => 10,
                'categoria_id' => 6
            ]
        );
        DB::table('produtos')->insert(
            [
                'nome' => 'Impressora',
                'preco'=> 850,
                'estoque' => 4,
                'categoria_id' => 6
            ]
        );
        DB::table('produtos')->insert(
            [
                'nome' => 'Mouse',
                'preco'=> 50,
                'estoque' => 40,
                'categoria_id' => 6
            ]
        );
        DB::table('produtos')->insert(
            [
                'nome' => 'Perfume Quasar',
                'preco'=> 200,
                'estoque' => 40,
                'categoria_id' => 3
            ]
        );
        DB::table('produtos')->insert(
            [
                'nome' => 'Cama de Casal',
                'preco'=> 930,
                'estoque' => 10,
                'categoria_id' => 4
            ]
        );
        DB::table('produtos')->insert(
            [
                'nome' => 'Guarda Roupa',
                'preco'=> 900,
                'estoque' => 11,
                'categoria_id' => 4
            ]
        );
    }
}
