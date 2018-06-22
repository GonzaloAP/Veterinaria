<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promocion extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'promocion';

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
    protected $fillable = ['descripcion', 'descuento', 'idServicio','estado'];

    /*Funciones*/
    public function scope_getPromocion($query)
    {
    $promocion =
        $query
            ->select('id','descripcion','descuento','idServicio')
            ->where('estado',true)
            ->orderBy('id','desc');
    return $promocion;
    }
}
