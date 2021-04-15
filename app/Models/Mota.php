<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mota extends Model
{
    use HasFactory;
    protected $primaryKey='id_mota';
    protected $table='motas';
    
    protected $fillable=[
        'id_estilo',
        'id_marca',
        'id_user',
        'id_publicidade',
        'observacoes',
        'modelo',
        'cilindrada',
        'quilometros',
        'preco',
        'cor',
        'data_fabrico',
        'fotografia'
        
    ];

public function estilo(){
    return $this->belongsTo('App\Models\Estilo','id_estilo');
}

 public function marca(){
    return $this->belongsTo('App\Models\Marca','id_marca');
}

public function publicidade(){
    return $this->belongsTo('App\Models\Publicidade','id_publicidade');
}

public function user(){
    return $this->belongsTo('App\Models\User','id_user');
}

}



?>