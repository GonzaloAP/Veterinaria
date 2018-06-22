<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalle extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'detalle';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primarykey = 'id';

    public $timestamps = false;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idFicha', 'idServicio','estado'];

    /*Funciones*/
    public function scope_getDetalles($query)
    {
    $detalle =
        $query
            ->select('idFicha','idServicio')
            ->where('estado',true)
            ->orderBy('idFicha','desc');
    return $detalle;
    }

    public function scope__eliminarDetalle($query, $idFicha){
    $detalle =
        $query
            ->select('idFicha','idServicio')
            ->where('estado',true)
            ->orderBy('idFicha','desc');
        
    return $detalle;   
    }
    
}
