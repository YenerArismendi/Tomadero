<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gastos extends Model
{
    protected $table = 'gastos';
    protected $primaryKey = 'id';
    protected $fillable = ['id_producto', 'proveedor', 'cantidad', 'precio', 'total'];

    public function producto()
    {
        return $this->belongsTo(Productos::class, 'id_producto');
    }
}
