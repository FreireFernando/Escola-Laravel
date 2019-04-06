<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Disciplina extends Model
{
    Use SoftDeletes;
    protected $datas = ['deleted_at'];

    public function curso(){
        return $this->belongsTo('App\Curso');
    }
}
