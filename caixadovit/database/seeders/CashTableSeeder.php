<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CashTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('cash')->insert([
            [
                'nomeproduto' => 'Up RD',
                'nomecliente' => 'RD',
                'valor' => '100 cash',
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => '',
                'valortotal' => '',
            ]
        ]);
    }
}
