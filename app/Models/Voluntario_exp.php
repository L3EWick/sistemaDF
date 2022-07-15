<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Voluntario_exp extends Model
{
    protected $table = "voluntario_exp";
    protected $fillable = [
     'voluntario_id',
     'experiencia_nome'
    ];
    public function voluntario(){

        return $this->belongsToMany('App\Models\Voluntario');
    
        }
    
}
