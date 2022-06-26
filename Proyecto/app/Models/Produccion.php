<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Produccion
 *
 * @property $id
 * @property $cantidad
 * @property $horas_extra
 * @property $id_empleado
 * @property $created_at
 * @property $updated_at
 *
 * @property Empleado $empleado
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Produccion extends Model
{
    
    static $rules = [
		'cantidad' => 'required',
		'horas_extra' => 'required',
		'id_empleado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cantidad','horas_extra','id_empleado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function empleado()
    {
        return $this->hasOne('App\Models\Empleado', 'id', 'id_empleado');
    }
    

}
