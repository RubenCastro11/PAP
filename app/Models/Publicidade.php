<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicidade extends Model
{
    use HasFactory;
    protected $primaryKey='id_publicidade';
    protected $table='publicidades';
    
    protected $fillable=[
        'id_mota',
        'designacao',
        'fotografia'
    ];
}

?>
