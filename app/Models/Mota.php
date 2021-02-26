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
        'id_user',
        'observacoes',
        'marca',
        'modelo',
        'cilindrada',
        'quilometros',
        'preco',
        'cor',
        'data_fabrico'
        
    ];

 
}



?>