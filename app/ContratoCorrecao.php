<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContratoCorrecao extends Model
{
    protected $fillable = [
    	'correcao',
        'contrato_sr_id'
    ];

    public function contratos_sr(){
        return $this->belongsTo('App\Contrato_sr')->withPivot('id');
    }
}
