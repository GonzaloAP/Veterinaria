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
    protected $fillable = ['idficha', 'idservicio','estado'];

    /*Funciones*/
    public function scope_getDetalles($query)
    {
    $detalle =
        $query
            ->join('servicio as s','s.id','idservicio')
            ->select('detalle.id as id','detalle.idficha as idficha','detalle.idservicio as idservicio'
                     ,'s.descripcion as descripcion')
            ->where('detalle.estado',true)
            ->orderBy('detalle.idficha','desc');
    return $detalle;
    }

    public function scope_getDetalle($query,$id)
    {
        $detalle =
            $query
                ->join('servicio as s','s.id','idservicio')
                ->select('detalle.id as id','detalle.idficha as idficha','detalle.idservicio as idservicio'
                    ,'s.descripcion as descripcion')
                ->where('detalle.id',$id);
        return $detalle;
    }

    /*Muestra el detalle de la ficha, es decir los (servicios)*/
    public function scope_getFichaDetalleServicios($query,$id)
    {
        $fichaD =
            $query
                ->join('fichaatencion as fa','fa.id','idficha')
                ->join('servicio as s','s.id','idservicio')
                ->select('detalle.idficha as idficha','detalle.idservicio as idservicio','s.descripcion as descripcion','s.preciototal as precio','detalle.id as id')
                ->where('fa.id',$id)
                ->where('detalle.estado','=',true)
                ->orderBy('s.id','asc');
        return $fichaD;
    }
}
