<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PixTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('pix')->insert([
            [
                'nomeproduto' => '5k morango',
                'nomecliente' => 'Tannem',
                'valor' => 'R$ 12.0',
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => '',
                'valortotal' => '',
            ]
        ]);
    }
}
