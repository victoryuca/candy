<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente_Juridico extends Model
{
    protected $table = 'juridico';
    protected $primaryKey = 'jur_id';

    protected $fillable = [
    	'jur_rif', 'jur_numerocarnet', 'jur_nombre', 'jur_razonsocial', 'jur_paginaweb', 'jur_denomcomerc', 
    	'jur_capital', 'jur_correo', 'fk_juridico_lugar_fiscal', 'fk_juridico_lugar_fisico', 
    	'fk_juridico_tienda'
    ];
}
