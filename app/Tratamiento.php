<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tratamiento extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tratamiento';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['descripcion', 'fechar', 'plazo', 'iddetalle','estado'];

    /*Funciones*/
    public function scope_getTratamientos($query)
    {
    $tratamiento =
        $query
            ->select('id','descripcion','fechar','plazo','iddetalle')
            ->where('estado',true)
            ->orderBy('id','desc');
    return $tratamiento;
    }
}
