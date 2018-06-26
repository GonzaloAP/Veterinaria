<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Ficha extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'fichaatencion';

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
    protected $fillable = ['fecha', 'idestado', 'idmascota','estado'];

    /*Funciones*/
    /*Muestra todas las fichas con estado habilitado*/
    public function scope_getFichas($query)
    {
    $ficha =
        $query
            ->join('estado as e','e.id','idestado')
            ->join('mascota as m','m.id','idmascota')
            ->select('fichaatencion.id as idF','fichaatencion.fecha as fechaF','e.descripcion as estado','m.nombre as mascota')
            ->where('fichaatencion.estado',true)
            ->orderBy('fichaatencion.id','desc');
    return $ficha;
    }

    /*Muestra Informacion sobre la ficha con informacion del cliente*/
    public function scope_getFichaDetalle($query,$id)
    {
        $ficha =
            $query
                ->join('estado as e','e.id','idestado')
                ->join('mascota as m','m.id','idmascota')
                ->join('cliente as cl','cl.id','m.idcliente')
                ->select('fichaatencion.id','fichaatencion.fecha','e.descripcion as idestado','m.nombre as idmascota',
                          DB::raw('concat(cl.nombre," ",cl.apellido) as nombreCl'),'cl.telefono as telefonoCl','cl.direccion as direccionCl')
                ->where('fichaatencion.id',$id);
        return $ficha;
    }




}
