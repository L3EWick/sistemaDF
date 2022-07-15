<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Voluntario extends Model
{
     protected $table = "voluntarios";

    protected $fillable = [
        'id',
        'nome',
        'data_de_nascimento',
        'cpf',
        'tipo_sanguineo',
        'endereco',
        'cep',
        'bairro',
        'municipio',
        'email',
        'telefone',
        'nivel_intrucao',
        'complemento'

    ];
    public function experiencias(){

    return $this->hasMany('App\Models\Voluntario_exp');

    }

    public function profissoes(){

        return $this->hasMany('App\Models\Voluntario_profissao');
    



    }
}
