<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'personal';

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
    protected $fillable = ['nombre', 'apellido', 'ci', 'telefono','email','estado'];

      /*Funciones*/
      public function scope_getPersonal($query)
      {
      $personal =
          $query
              ->select('id','nombre','apellido','ci','telefono')
              ->where('estado',true)
              ->orderBy('id','desc');
      return $personal;
      }
    
}
