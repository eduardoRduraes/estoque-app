<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produtos_table';

    protected $fillable = array('nome', 'descricao','preco', 'saldo');

    protected $guarded = ['id'];
}
