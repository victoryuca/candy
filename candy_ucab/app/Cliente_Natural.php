<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente_Natural extends Model
{
    protected $table = 'cliente_natural';
    protected $primaryKey = 'nat_id';

    protected $fillable = [
    	'nat_cedula', 'nat_numerocarnet', 'nat_nombre', 'nat_apellido', 'nat_fechanac', 'fk_natural_lugar', 'fk_natural_tienda'
    ];
}
