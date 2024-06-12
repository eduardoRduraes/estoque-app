<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProdutosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produtos_table')->insert([
            [
            'id' => 1,
            'nome' => Str::title("parafuso"),
            'descricao' => Str::title("parafuso sestavado 50"),
            'preco' => 10,
            'saldo' => 1,
            ],[
                'id' => 2,
                'nome' => Str::title("broca"),
                'descricao' => Str::title("broca furadeira 1/8"),
                'preco' => 2,
                'saldo' => 3,
            ],[
                'id' => 3,
                'nome' => Str::title("furadeira"),
                'descricao' => Str::title("furadeira com bateria"),
                'preco' => 500,
                'saldo' => 0,
            ],[
                'id' => 4,
                'nome' => Str::title("chave de fenda"),
                'descricao' => Str::title("chave de fenda phillips"),
                'preco' => 15,
                'saldo' => 0,
            ],[
                'id' => 5,
                'nome' => Str::title("chave de boca 14/15"),
                'descricao' => Str::title("chave de boca 14/15"),
                'preco' => 25,
                'saldo' => 2,
            ]
        ]);
    }
}
