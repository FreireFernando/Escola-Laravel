<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Curso extends Model
{
    Use SoftDeletes;
    protected $datas = ['deleted_at'];

    public function disciplinas(){
        return $this->hasMany('App\Disciplina');
    }

    protected $fillable = ['nome', 'duracao'];
    

    
}
