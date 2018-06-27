<?php

namespace App\Http\Controllers;

use App\Detalle;
use App\Mascotum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EstadisticaController extends Controller
{
    public function  index()
    {
     return view('admin.estadistica.index');
    }
    public function Servicios($id)
    {
        $servicios = Detalle::join('servicio as s','s.id','detalle.idservicio')
                              ->select(
                                       DB::raw('COUNT(detalle.idservicio) as id'),
                                       DB::raw('((COUNT(detalle.idservicio)*100)/(SELECT COUNT(*) FROM servicio as s, detalle as d WHERE s.id=d.idservicio))as porcentaje'),
                                       's.descripcion as descripcion'
                                       )
                              ->groupBy('s.id')
                              ->orderBy('id','desc')
                              ->get();

        return view('admin.estadistica.servicios',compact('servicios'));
    }

    public function Mascotas($id)
    {
        $mascotas = Mascotum::select(
                DB::raw('COUNT(mascota.especie) as e'),
                DB::raw('(COUNT(mascota.especie))*100/(select count(*) from mascota) as porcentaje'),
                'mascota.especie as especie'
            )
            ->groupBy('mascota.especie')
            ->orderBy('e','desc')
            ->get();

        return view('admin.estadistica.mascotas',compact('mascotas'));
    }

}
