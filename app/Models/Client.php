<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Client
 *
 * @property $apellido_ma
 * @property $apellido_pa
 * @property $telefono
 * @property $num_compras
 * @property $calle
 * @property $cp
 * @property $estado
 * @property $alcaldia
 * @property $colonia
 * @property $fecha_nacimiento
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Client extends Model
{

    public $timestamps = false;

    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','email','apellido_ma','apellido_pa','telefono','num_compras','calle','cp','estado','alcaldia','colonia','fecha_nacimiento'];



}
