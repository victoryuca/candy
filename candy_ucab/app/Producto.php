<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'producto';
    protected $primaryKey = 'pro_id';

    protected $fillable = [
    	'pro_precio', 'pro_nombre', 'pro_color', 'pro_sabor'
    ];
}
