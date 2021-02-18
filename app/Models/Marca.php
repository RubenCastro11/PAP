<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;
    protected $primaryKey='id_marca';
    protected $table='marcas';
    
    protected $fillable=[
        'nome',
        'origem_marca',
        'ano_criacao',
        'logotipo'
    ];
}
