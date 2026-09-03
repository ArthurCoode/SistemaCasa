<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alimentos extends Model
{
    protected $table = 'tbl_alimentos'; // Tabela para controlar alimentos da casa

    protected $primaryKey = "alimento_id";

    protected $fillable = ["nomeAlimento", "tipoAlimento", "quantidade" ];

    protected $hidden = ["created_at", "updated_at"];
}
