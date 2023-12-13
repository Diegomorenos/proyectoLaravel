<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reserva
 *
 * @property $id
 * @property $cant_hab
 * @property $adultos
 * @property $ninos
 * @property $fecha_inicio
 * @property $fecha_fin
 * @property $valor
 * @property $documento
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property DetalleFactura[] $detalleFacturas
 * @property Estado $estado
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Reserva extends Model
{
    
    static $rules = [
		'cant_hab' => 'required',
		'adultos' => 'required',
		'ninos' => 'required',
		'fecha_inicio' => 'required',
		'fecha_fin' => 'required',
		'valor' => 'required',
		'documento' => 'required',
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cant_hab','adultos','ninos','fecha_inicio','fecha_fin','valor','documento','estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detalleFacturas()
    {
        return $this->hasMany('App\Models\DetalleFactura', 'reserva', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function estado()
    {
        return $this->hasOne('App\Models\Estado', 'id', 'estado');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'documento', 'documento');
    }
    

}
