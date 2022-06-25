<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Compañia
 *
 * @property $id
 * @property $nombre_empresa
 * @property $ciudad
 * @property $created_at
 * @property $updated_at
 *
 * @property Producto[] $productos
 * @property Proveedor[] $proveedors
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Compañia extends Model
{
    
    static $rules = [
		'nombre_empresa' => 'required',
		'ciudad' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_empresa','ciudad'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productos()
    {
        return $this->hasMany('App\Models\Producto', 'id_inv', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function proveedors()
    {
        return $this->hasMany('App\Models\Proveedor', 'id_comp', 'id');
    }
    

}
