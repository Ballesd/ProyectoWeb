<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Proveedor
 *
 * @property $id
 * @property $cedula
 * @property $nombre
 * @property $apellido
 * @property $telefono
 * @property $id_comp
 * @property $created_at
 * @property $updated_at
 *
 * @property Compañium $compañium
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Proveedor extends Model
{
    
    static $rules = [
		'cedula' => 'required',
		'nombre' => 'required',
		'apellido' => 'required',
		'telefono' => 'required',
		'id_comp' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cedula','nombre','apellido','telefono','id_comp'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function compañium()
    {
        return $this->hasOne('App\Models\Compañium', 'id', 'id_comp');
    }
    

}
