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
                'nomeproduto' => 'Cash Vendido Por Pix',
                'nomecliente' => 'Vitiello',
                'valor' => 0,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => 162.5,
                'valortotal' => null,
                'datacompra' => '2024-06-04'
            ],
            [
                'nomeproduto' => 'Vaporeon',
                'nomecliente' => 'Vitiello',
                'valor' => 0,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => 5,
                'valortotal' => null,
                'datacompra' => '2024-06-21'
            ],
            [
                'nomeproduto' => 'Ovo 4int',
                'nomecliente' => 'Vitiello',
                'valor' => 0,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => 40,
                'valortotal' => null,
                'datacompra' => '2024-06-26'
            ],
            [
                'nomeproduto' => 'Up RD',
                'nomecliente' => 'RD',
                'valor' => 100,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-04'
            ],
            [
                'nomeproduto' => 'Maça[4] RO',
                'nomecliente' => 'Vendido no Mercador',
                'valor' => 1,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-04'
            ],
            [
                'nomeproduto' => 'Arco Composto[4] - custo sp -7% , medio+8%, sombrio +6%, sp max -68',
                'nomecliente' => 'Vendido no Mercador',
                'valor' => 7,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-04'
            ],
            [
                'nomeproduto' => 'Carta Hidra',
                'nomecliente' => 'Vendido no Mercador',
                'valor' => 10,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-04'
            ],
            [
                'nomeproduto' => 'Faca[4] RO',
                'nomecliente' => 'Vendido no Mercador',
                'valor' => 1,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-04'
            ],
            [
                'nomeproduto' => 'Carta Medusa',
                'nomecliente' => 'Vendido no Mercador',
                'valor' => 6,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-04'
            ],
            [
                'nomeproduto' => 'Malha[1]',
                'nomecliente' => 'Vendido no Mercador',
                'valor' => 10,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-04'
            ],
            [
                'nomeproduto' => 'Maça[4] RO',
                'nomecliente' => 'Vendido no Mercador',
                'valor' => 2,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-04'
            ],
            [
                'nomeproduto' => 'Bota[1]',
                'nomecliente' => 'Vendido no Mercador',
                'valor' => 3,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-04'
            ],
            [
                'nomeproduto' => 'Bastão[1] RO',
                'nomecliente' => 'Vendido no Mercador',
                'valor' => 1,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-04'
            ],
            [
                'nomeproduto' => 'Carta Drops 2x',
                'nomecliente' => 'Vendido no Mercador',
                'valor' => 12,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-04'
            ],
            [
                'nomeproduto' => 'Carta Poring Noel',
                'nomecliente' => 'Vendido no Mercador',
                'valor' => 3,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-04'
            ],
            [
                'nomeproduto' => 'Bota[1]',
                'nomecliente' => 'Vendido no Mercador',
                'valor' => 3,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-04'
            ],
            [
                'nomeproduto' => 'Elmo',
                'nomecliente' => 'Vendido no Mercador',
                'valor' => 1,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-04'
            ],
            [
                'nomeproduto' => 'Carta Poring Noel 4x',
                'nomecliente' => 'Vendido no Mercador',
                'valor' => 12,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-04'
            ],
            [
                'nomeproduto' => 'Broche',
                'nomecliente' => 'Vendido no Mercador',
                'valor' => 2,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-04'
            ],
            [
                'nomeproduto' => 'Faca[4] RO',
                'nomecliente' => 'Vendido no Mercador',
                'valor' => 2,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-04'
            ],

            [
                'nomeproduto' => 'Maça[4] RO',
                'nomecliente' => 'Vendido no Mercador',
                'valor' => 1,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-04'
            ],
            [
                'nomeproduto' => 'Bota[1]',
                'nomecliente' => 'Vendido no Mercador',
                'valor' => 3,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-04'
            ],
            [
                'nomeproduto' => 'Bastão[1] RO',
                'nomecliente' => 'Vendido no Mercador',
                'valor' => 2,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-04'
            ],
            [
                'nomeproduto' => 'Bastão[1] RO',
                'nomecliente' => 'Vendido no Mercador',
                'valor' => 1,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-04'
            ],
            [
                'nomeproduto' => 'Broche',
                'nomecliente' => 'Vendido no Mercador',
                'valor' => 1,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-04'
            ],
            [
                'nomeproduto' => '11x Armas Lixo RO',
                'nomecliente' => 'Vendido no Mercador',
                'valor' => 14,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-04'
            ],
            [
                'nomeproduto' => 'Chapéu de Bufão',
                'nomecliente' => 'Vendido no Mercador',
                'valor' => 1,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-04'
            ],
            [
                'nomeproduto' => '2x Carta Gargula',
                'nomecliente' => 'Vendido no Mercador',
                'valor' => 4,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-04'
            ],
            [
                'nomeproduto' => '1x Carta Pesadelo',
                'nomecliente' => 'Vendido no Mercador',
                'valor' => 1,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-04'
            ],
            [
                'nomeproduto' => 'Luva de Puxada',
                'nomecliente' => 'Vendido no Mercador',
                'valor' => 6,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-04'
            ],
            [
                'nomeproduto' => 'Luva de Puxada',
                'nomecliente' => 'Vendido no Mercador',
                'valor' => 6,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-04'
            ],
            [
                'nomeproduto' => 'Katana[1] RO',
                'nomecliente' => 'Vendido no Mercador',
                'valor' => 1,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-04'
            ],
            [
                'nomeproduto' => '2x Maça[4] RO',
                'nomecliente' => 'Vendido no Mercador',
                'valor' => 4,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-04'
            ],
            [
                'nomeproduto' => 'Clava RO',
                'nomecliente' => 'Vendido no Mercador',
                'valor' => 2,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-04'
            ],
            [
                'nomeproduto' => 'Guisarme RO',
                'nomecliente' => 'Vendido no Mercador',
                'valor' => 2,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-04'
            ],
            [
                'nomeproduto' => 'Glaive',
                'nomecliente' => 'Vendido no Mercador',
                'valor' => 1,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-04'
            ],
            [
                'nomeproduto' => 'Stiletto RO',
                'nomecliente' => 'Vendido no Mercador',
                'valor' => 1,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-04'
            ],
            [
                'nomeproduto' => '2x Ovos Rank C',
                'nomecliente' => 'Vendido no Mercador',
                'valor' => 8,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-04'
            ],
            [
                'nomeproduto' => 'Stiletto RO',
                'nomecliente' => 'Vendido no Mercador',
                'valor' => 1,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-04'
            ],
            [
                'nomeproduto' => '5x Carta Poring Noel',
                'nomecliente' => 'Vendido no Mercador',
                'valor' => 20,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-04'
            ],
            [
                'nomeproduto' => 'Carta Zipper',
                'nomecliente' => 'Vendido no Mercador',
                'valor' => 1,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-04'
            ],
            [
                'nomeproduto' => 'Carta Goblin',
                'nomecliente' => 'Vendido no Mercador',
                'valor' => 1,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-04'
            ],
            [
                'nomeproduto' => 'Carta Flora',
                'nomecliente' => 'Vendido no Mercador',
                'valor' => 3,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-04'
            ],
            [
                'nomeproduto' => 'Ovo de Pesadelo',
                'nomecliente' => 'Vendido no Mercador',
                'valor' => 10,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-04'
            ],
            [
                'nomeproduto' => 'Carta Anolian',
                'nomecliente' => 'Vendido no Mercador',
                'valor' => 10,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-04'
            ],
            [
                'nomeproduto' => 'Arco de Caça +6',
                'nomecliente' => 'Vendido no Mercador',
                'valor' => 1,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-04'
            ],
            [
                'nomeproduto' => 'Chapéu Fedorento',
                'nomecliente' => 'Vendido no Mercador',
                'valor' => 1,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-04'
            ],
            [
                'nomeproduto' => 'Botas[1]',
                'nomecliente' => 'Vendido no Mercador',
                'valor' => 3,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-04'
            ],
            [
                'nomeproduto' => 'Carta Bathory ',
                'nomecliente' => 'Vendido no Mercador',
                'valor' => 12,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-04'
            ],
            [
                'nomeproduto' => 'Stiletto RO',
                'nomecliente' => 'Vendido no Mercador',
                'valor' => 2,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-04'
            ],
            [
                'nomeproduto' => '2x Carta Poring Noel',
                'nomecliente' => 'Vendido no Mercador',
                'valor' => 2,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-04'
            ],
            [
                'nomeproduto' => 'Carta Tritao',
                'nomecliente' => 'Vendido no Mercador',
                'valor' => 8,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-04'
            ],
            [
                'nomeproduto' => 'Carta Pupa',
                'nomecliente' => 'Vendido no Mercador',
                'valor' => 3,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-04'
            ],
            [
                'nomeproduto' => 'Ecudo Espelhado',
                'nomecliente' => 'Vendido no Mercador',
                'valor' => 1,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-04'
            ],
            [
                'nomeproduto' => 'Carta Lavadeira',
                'nomecliente' => 'Vendido no Mercador',
                'valor' => 3,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-04'
            ],
            [
                'nomeproduto' => 'Carta Argiope + Minha parte na carta Caimbra',
                'nomecliente' => 'Vendido no Mercador',
                'valor' => 5.5,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-04'
            ],
            [
                'nomeproduto' => 'Stiletto RO',
                'nomecliente' => 'Vendido no Mercador',
                'valor' => 1,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-04'
            ],
            [
                'nomeproduto' => 'Main Gauche RO',
                'nomecliente' => 'Vendido no Mercador',
                'valor' => 2,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-04'
            ],
            [
                'nomeproduto' => 'Botas[1] + Brinco',
                'nomecliente' => 'Drake Cadman',
                'valor' => 5,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-04'
            ],
            [
                'nomeproduto' => 'Carta Cãibra',
                'nomecliente' => 'Zeus Paladin',
                'valor' => 17,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-05'
            ],
            [
                'nomeproduto' => 'Carta Cãibra',
                'nomecliente' => 'ScreenPanzer',
                'valor' => 18,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-07'
            ],
            [
                'nomeproduto' => 'Botas',
                'nomecliente' => 'Win Sniper',
                'valor' => 3,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-05'
            ],
            [
                'nomeproduto' => 'Carta Poring',
                'nomecliente' => 'dreamer',
                'valor' => 6,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-05'
            ],
            [
                'nomeproduto' => 'Carta Grand Peco',
                'nomecliente' => 'GantR',
                'valor' => 2,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-07'
            ],
            [
                'nomeproduto' => 'Ovo de Seyren 3str 3%danomedio',
                'nomecliente' => 'Tuts Sell',
                'valor' => 39,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-09'
            ],
            [
                'nomeproduto' => 'Carta Bathory',
                'nomecliente' => 'Desert Sx',
                'valor' => 12,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-09'
            ],
            [
                'nomeproduto' => 'Carta Poring Noel',
                'nomecliente' => 'Desert Sx',
                'valor' => 1,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-09'
            ],
            [
                'nomeproduto' => 'Carta Poring Noel',
                'nomecliente' => 'NetinhaTabacuda',
                'valor' => 1,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-09'
            ],
            [
                'nomeproduto' => 'Carta Poring Noel',
                'nomecliente' => 'John',
                'valor' => 1,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-09'
            ],
            [
                'nomeproduto' => 'Carta Poring Noel',
                'nomecliente' => 'Reigan',
                'valor' => 1,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-09'
            ],
            [
                'nomeproduto' => 'Carta Medusa',
                'nomecliente' => 'SDZippo',
                'valor' => 2.5,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-09'
            ],
            [
                'nomeproduto' => '3xCarta Poring Noel',
                'nomecliente' => 'Heyhey Casca',
                'valor' => 2.5,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-09'
            ],
            [
                'nomeproduto' => 'Bastão 2dex 5%hp',
                'nomecliente' => 'TARADO POR FENDA',
                'valor' => 10,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-09'
            ],
            [
                'nomeproduto' => '(Carta Papel + Anel)/10',
                'nomecliente' => 'Dropado na instancia de hell',
                'valor' => 10.5,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-10'
            ],
            [
                'nomeproduto' => '(Carta Esqueleto Arqueiro)/10',
                'nomecliente' => 'Dropado na instancia de hell',
                'valor' => 1,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-11'
            ],
            [
                'nomeproduto' => '(Anel)/10',
                'nomecliente' => 'Dropado na instancia de hell',
                'valor' => 1.36,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-11'
            ],
            [
                'nomeproduto' => '2 Carta Flora',
                'nomecliente' => 'TomaTex',
                'valor' => 4,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-14'
            ],
            [
                'nomeproduto' => '1 Carta Zipper',
                'nomecliente' => 'Martelada',
                'valor' => 1,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-14'
            ],
            [
                'nomeproduto' => '1 Carta Poring Noel',
                'nomecliente' => 'Mika7',
                'valor' => 1,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-18'
            ],
            [
                'nomeproduto' => '1 Carta Medusa',
                'nomecliente' => 'Exarchopoulos',
                'valor' => 3,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-18'
            ],
            [
                'nomeproduto' => 'Luva de Puxada',
                'nomecliente' => 'gabuz3ra',
                'valor' => 8,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-18'
            ],
            [
                'nomeproduto' => 'Carta Louva-a-Deus',
                'nomecliente' => 'Kaname',
                'valor' => 4,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-18'
            ],
            [
                'nomeproduto' => 'Luva de Puxada',
                'nomecliente' => 'Guarda Chuva',
                'valor' => 8,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-21'
            ],
            [
                'nomeproduto' => 'Luva',
                'nomecliente' => 'SellBuy',
                'valor' => 2,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-21'
            ],
            [
                'nomeproduto' => 'missao sagrada (provavelmente nome errado no rodex)',
                'nomecliente' => 'ezmoney',
                'valor' => 2,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-25'
            ],
            [
                'nomeproduto' => 'Elmo de Goibne',
                'nomecliente' => 'JutsuPirocaFlamegante',
                'valor' => 1,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-25'
            ],
            [
                'nomeproduto' => 'Elmo de Goibne',
                'nomecliente' => 'Ken Humano',
                'valor' => 1,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-25'
            ],
            [
                'nomeproduto' => 'Pingente de Morrigane',
                'nomecliente' => 'Snail',
                'valor' => 3,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-25'
            ],
            [
                'nomeproduto' => '2x Benção de Odin',
                'nomecliente' => 'Duenz',
                'valor' => 6,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-26'
            ],
            [
                'nomeproduto' => '1 Elmo de Goibne',
                'nomecliente' => 'Uchiha Magoado',
                'valor' => 1,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-26'
            ],
            [
                'nomeproduto' => '1 Armadura de Goibne',
                'nomecliente' => 'Desconhecido',
                'valor' => 2,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-27'
            ],
            [
                'nomeproduto' => '2x Valk Shield 70/11',
                'nomecliente' => 'claudin ne amor + motorheaD',
                'valor' => 6.3,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-06-27'
            ],
            [
                'nomeproduto' => 'Neuralizador',
                'nomecliente' => 'Vitor',
                'valor' => 5,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-07-04'
            ],
            [
                'nomeproduto' => 'OVO B',
                'nomecliente' => 'Gimme',
                'valor' => 30,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-07-09'
            ],
            [
                'nomeproduto' => 'Carta Verit',
                'nomecliente' => 'MariusBlack',
                'valor' => 6,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-07-09'
            ],
            [
                'nomeproduto' => 'Carta Poring Noel',
                'nomecliente' => 'Leekhan',
                'valor' => 1,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-07-09'
            ],
            [
                'nomeproduto' => 'Carta Anmut',
                'nomecliente' => 'mikkiz',
                'valor' => 40,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-07-09'
            ],
            [
                'nomeproduto' => 'Ovo de Erems',
                'nomecliente' => 'Dashiki',
                'valor' => 3,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-07-15'
            ],
            [
                'nomeproduto' => 'Ovo de Seyren',
                'nomecliente' => 'AntiDemon',
                'valor' => 3,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-07-15'
            ],
            [
                'nomeproduto' => '3 botas[1]',
                'nomecliente' => 'Fox Merchant',
                'valor' => 3,
                'nomeprodutoterceiro' => '',
                'nometerceiro' => '',
                'valorterceiro' => null,
                'valortotal' => null,
                'datacompra' => '2024-07-15'
            ],
        ]);
    }
}
