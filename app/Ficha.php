<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
    protected $fillable = ['fecha', 'idEstado', 'idMascota','estado'];

    /*Funciones*/
    public function scope_getFichas($query)
    {
    $ficha =
        $query
            ->select('id','fecha','idEstado','idMascota')
            ->where('estado',true)
            ->orderBy('id','desc');
    return $ficha;
    }
}
