<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'servicio';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    public $timestamps = false;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['descripcion', 'precio', 'precioTotal', 'idPersonal','estado'];

    /*Funciones*/
    public function scope_getServicios($query)
    {
    $servicio =
        $query
            ->select('id','descripcion','precio','precioTotal','idPersonal')
            ->where('estado',true)
            ->orderBy('id','desc');
    return $servicio;
    }
}
