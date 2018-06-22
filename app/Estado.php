<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
   
    
    protected $table = 'estado';
    
    
    protected $primaryKey = 'id';
    
    public $timestamps = false;
    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['descripcion','estado'];

    /*Funciones*/
    public function scope_getEstados($query)
    {
    $estado =
        $query
            ->select('id','descripcion')
            ->where('estado',true)
            ->orderBy('id','desc');
    return $estado;
    }
    
}
