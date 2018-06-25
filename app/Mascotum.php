<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Mascotum extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'mascota';

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
    protected $fillable = ['nombre', 'especie', 'raza', 'sexo', 'edad', 'idcliente','estado'];

     /*Funciones*/
     public function scope_getMascotas($query)
     {
     $mascota =
         $query
             ->select('id','nombre','especie','raza','sexo','edad','idcliente')
             ->where('estado',true)
             ->orderBy('id','desc');
     return $mascota;
     }

}
