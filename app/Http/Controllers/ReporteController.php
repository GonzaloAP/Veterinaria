<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Mascotum;
use Illuminate\Support\Facades\DB;

class ReporteController extends Controller
{
    public function reportemascota($id){
        $listaMascota=Mascotum::all()->where('estado',true)->where('idcliente',$id);
        return view('admin/reportes/lista_mascota',["mascota"=>$listaMascota]);
    }

    public function reportecli(){
        $listaMascota=Cliente::all()->where('estado',true);
        return view('admin/reportes/lista_cliente',["cliente"=>$listaMascota]);
    }

    public function consultaMascota($id)
    {
        $infmas = DB::select("SELECT
            m.id AS idmas,
            m.nombre AS nombre,
            m.especie AS especie,
            m.raza AS raza,
            m.edad AS edad,
            m.sexo AS sexo,
            cl.nombre AS nombrecliente,
            cl.apellido AS apellido,
            cl.direccion AS direccion,
            cl.email AS email,
            cl.telefono AS telefono
            FROM mascota AS m,cliente AS cl
            WHERE cl.id = m.idcliente
            AND m.id= ?", [$id])[0];
        //return $infMascota;

        $inffa = DB::select("
            SELECT
            fa.id as id_ficha,
            fa.fecha as fecha_ficha,
            e.descripcion as descripcion_estado,
            d.idservicio as id_servicio,
            s.descripcion as descripcion_servicio,
            s.precioTotal as precio_total,
            p.nombre as nombre_personal
            FROM mascota AS m
            ,cliente AS cl
            ,fichaatencion AS fa
            ,detalle AS d
            ,servicio AS s
            ,personal AS p
            ,estado AS e
            WHERE cl.id = m.idcliente
            AND m.id = fa.idmascota
            AND d.idficha = fa.id
            AND d.idservicio = s.id
            AND p.id =s.idpersonal
            AND fa.idestado = e.id
            AND m.id= ?", [$id]);
        //return $infFichaAtencion;
        return view('admin/reportes/consultaMascota', ["inffa" => $inffa, "infmas" => $infmas]);

    }

    public function consultaCliente($id)
    {
        $infCliente = DB::select("SELECT
            cliente.nombre,
            cliente.apellido,
            cliente.telefono,
            cliente.direccion,
            cliente.email
            FROM cliente
            WHERE cliente.estado=TRUE
            AND cliente.id=?", [$id])[0];
        //return $infCliente;
        $infMascotas = DB::select("SELECT
            m.id,
            m.nombre AS nombre_mascota,
            m.especie AS especie_mascota,
            m.raza AS raza_mascota,
            m.sexo AS sexo_mascota,
            m.edad AS edad_mascota
            FROM mascota as m,cliente as cl
            WHERE cl.id=m.idcliente
            AND cl.estado=true
            AND m.estado=true
            AND cl.id=?", [$id]);
        //return $infMascota;
        return view('admin/reportes/consultaCliente',["clientem"=>$infCliente,"infmascotas"=>$infMascotas]);
    }

    public function consultaHistorial($id)
    {
        $mascota = Mascotum::findOrFail($id);
        $clientem = DB::select('select masc.*, cli.nombre as cnombre
                  ,cli.apellido,cli.telefono,cli.direccion,cli.email 
                  from cliente as cli, mascota as masc
                WHERE cli.id=masc.idcliente AND masc.id=?', [$id])[0];
        //return $clientem;
        $historial = DB::select(
            "SELECT
            m.nombre AS nombre_mascota,
            fa.id AS nro_ficha,
            fa.fecha AS fecha_ficha,
            s.id AS id_servicio,
            s.descripcion AS descripcion_servicio,
            s.preciototal AS precio_total,
            t.descripcion AS descripcion_tratamiento,
            t.fechar AS fecha_retorno,
            t.plazo AS plazo
            FROM mascota AS m,tratamiento AS t,fichaatencion AS fa,servicio AS s,detalle AS d
            WHERE m.id = fa.idmascota
            AND fa.id = d.idficha
            AND s.id = d.idservicio
            AND t.iddetalle=d.id
            AND m.id= ?", [$id]);
        //return $mascota;
        return view('admin/reportes/consultaHistorico', ["historial" => $historial, "mascota" => $mascota, "clientem" => $clientem]);
    }
}
