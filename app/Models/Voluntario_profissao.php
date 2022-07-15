<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Voluntario_profissao extends Model
{   
    protected $table = "voluntario_profissao";
    protected $fillable = [
     'voluntario_id',
     'profissao_nome'
    ];
    public function voluntario(){

        return $this->belongsToMany('App\Models\Voluntario');
    
        }
    
}
