<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mesas extends Model
{
    protected $table = 'mesas';
    protected $primaryKey = 'id';
    protected $fillable = ['numero_mesa', 'descripcion', 'estado'];

    public function getEstadoTextAttribute()
    {
        switch ($this->estado) {
            case 1:
                return 'Activo';
            case 2:
                return 'Inactivo';
            default:
                return 'por definir';
        }
    }
}
