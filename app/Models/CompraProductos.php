<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompraProductos extends Model
{
    protected $table = 'compra_productos';
    protected $primaryKey = 'id';
    protected $fillable = ['id_producto', 'proveedor', 'cantidad', 'precio', 'total', 'descripcion'];

    public function producto()
    {
        return $this->belongsTo(Productos::class, 'id_producto');
    }
}
