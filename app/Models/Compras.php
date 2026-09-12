<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Compras extends Model
{
    protected $table = 'tbl_compras';
    protected $primaryKey = 'compras_id';
    protected $fillable = ["nomeCompra", "tipoCompra", "quantidade", "valor" ];
    protected $hidden = ["created_at", "updated_at"];


}
