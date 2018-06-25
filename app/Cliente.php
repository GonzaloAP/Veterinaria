<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Cliente extends Model
{
   
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cliente';

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
    protected $fillable = ['nombre', 'apellido', 'telefono', 'direccion', 'email','estado'];

    /*Funciones*/
    public function scope_getClientes($query)
    {
    $cliente =
        $query
            ->select('id','nombre','apellido','telefono','direccion','email')
            ->where('estado',true)
            ->orderBy('id','desc');
    return $cliente;
    }

    public function scope_getClientesId($query)
    {
        $cliente = $query
            ->select(DB::raw('concat(nombre," ",apellido) as nombre'),'id')->distinct()
            ->where ('estado',true);
        return $cliente;
    }
    
}
