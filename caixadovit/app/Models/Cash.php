<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cash extends Model
{
    protected $table = 'cash';

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
