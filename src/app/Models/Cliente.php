<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    // campos publicáveis
    protected $fillable = ['nome','idade'];

    // nome da chave primaria
    protected $primaryKey = 'clienteid'; 

    // Nome da tabela
    protected $table = 'clientes';

    // Informa que esta trabalhando com incremento
    public $incrementing = true;

    // não utiliza timestamps nos controles (created & updated)
    public $timestamps = false;

}
