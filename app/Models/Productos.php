<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $table = 'productos';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre', 'tamanio', 'categoria', 'estado', 'imagen', 'descripcion'];

    public function getEstadoTextAttribute()
    {
        switch ($this->estado) {
            case 1:
                return 'Activo';
            case 2:
                return 'Inactivo';
            default:
                return 'Por definir';
        }
    }
}
