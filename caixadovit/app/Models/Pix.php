<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pix extends Model
{
    protected $table = 'pix';

    protected $fillable = [
        'nomeproduto',
        'nomecliente',
        'valor',
        'nomeprodutoterceiro',
        'nometerceiro',
        'valorterceiro',
        'valortotal',
        'datacompra',
    ];

    use HasFactory;
}
