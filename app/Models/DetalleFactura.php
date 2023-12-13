<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DetalleFactura
 *
 * @property $id
 * @property $factura
 * @property $reserva
 * @property $servicio
 * @property $producto
 * @property $cantidad
 * @property $valor
 * @property $created_at
 * @property $updated_at
 *
 * @property Factura $factura
 * @property Producto $producto
 * @property Reserva $reserva
 * @property Servicio $servicio
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class DetalleFactura extends Model
{
    
    static $rules = [
		'factura' => 'required',
		'reserva' => 'required',
		'servicio' => 'required',
		'producto' => 'required',
		'cantidad' => 'required',
		'valor' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['factura','reserva','servicio','producto','cantidad','valor'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function factura()
    {
        return $this->hasOne('App\Models\Factura', 'id', 'factura');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function producto()
    {
        return $this->hasOne('App\Models\Producto', 'id', 'producto');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function reserva()
    {
        return $this->hasOne('App\Models\Reserva', 'id', 'reserva');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function servicio()
    {
        return $this->hasOne('App\Models\Servicio', 'id', 'servicio');
    }
    

}
