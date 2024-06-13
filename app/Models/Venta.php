<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Venta extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'usuario_ID',
        'descripcion',
        'precio_Total',
        'nombre_pago',
        'email_pago',
        'direccion',
        'estado',
    ];

    public $table='ventas';

    public static function getAllVentas(){

        $ventas=self::all();
        return $ventas;
    }

}
