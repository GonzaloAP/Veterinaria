<?php

namespace App\Http\Controllers\Controladores;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Detalle;
use App\Servicio;
use Illuminate\Http\Request;
use DB;

class DetalleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $detalle = Detalle::where('idFicha', 'LIKE', "%$keyword%")
                ->orWhere('idServicio', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $detalle = Detalle::_getDetalles()->paginate($perPage);
        }

        return view('admin.detalle.index', compact('detalle'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $fichaId= DB::table('fichaatencion')->max('id');
        $servicios = Servicio::_getServicios()->get();
        //return json_encode(array('gh'=>$servicios));
        return view('admin.detalle.create', compact('fichaId','servicios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $idServicio = $request->get('idS');

        $cont = 0;
        //return json_encode(array('df'=> $request->get('fichaId')));
        while ($cont < count($idServicio)) {
            $Detalle = new Detalle();
            $Detalle->idficha=$request->get('fichaId');
            $Detalle->idservicio=$idServicio[$cont];
            $Detalle->estado=true;
            $Detalle -> save();
            $cont = $cont + 1;
        }
        return redirect('admin/ficha');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $detalle = Detalle::findOrFail($id);

        return view('admin.detalle.show', compact('detalle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {

        $detalle = Detalle::findOrFail($id);
        $servicio = Servicio::_getServicios()->get();
        //$detalle = Detalle::_getDetalle($id)->get()->first();

        return view('admin.detalle.edit', compact('detalle','servicio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {

        $detalle = Detalle::findOrFail($id);
        //$detalle->update($requestData);


        $detalle->idficha = $request->get('idficha');
        $detalle->idservicio = $request->get('idservicio');
        $detalle->update();

        return redirect('admin/ficha')->with('flash_message', 'Detalle updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $detalle = Detalle::findOrFail($id);

        $detalle->estado = false;
        $detalle->save();
        
        return redirect('admin/ficha')->with('flash_message', 'Detalle eliminado!');
    }
}
