<?php

namespace App\Http\Controllers\Controladores;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Tratamiento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TratamientoController extends Controller
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
            $tratamiento = Tratamiento::where('descripcion', 'LIKE', "%$keyword%")
                ->orWhere('fechar', 'LIKE', "%$keyword%")
                ->orWhere('plazo', 'LIKE', "%$keyword%")
                ->orWhere('iddetalle', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $tratamiento = Tratamiento::_getTratamientos()->paginate($perPage);
        }

        return view('admin.tratamiento.index', compact('tratamiento'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $detalles = DB::table('servicio as serv')
            ->join('detalle as det', 'det.idservicio', 'serv.id')
            ->where('det.estado', '=', 1)
            ->select('det.*', 'serv.descripcion as servicio')
            ->get();
        //return $detalles;
        //return json_encode(array('sd'=>$detalles));
         return view('admin.tratamiento.create', ["detalles" => $detalles]);
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
        $this->validate($request, [
            'descripcion' => 'required|max:30',
            'fechar' => 'required',
            'plazo' => 'required'
        ]);
        Tratamiento::create([
            'descripcion' => $request->descripcion,
            'fechar' => $request->fechar,
            'plazo' => $request->plazo,
            'iddetalle' => $request->iddetalle,
            'estado' => true,
        ]);

        return redirect('admin/tratamiento')->with('flash_message', 'Tratamiento added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $tratamiento = Tratamiento::findOrFail($id);
        return view('admin.tratamiento.show', compact('tratamiento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $detalles = DB::table('servicio as serv')
            ->join('detalle as det', 'det.idservicio', 'serv.id')
            ->where('det.estado', '=', 1)
            ->select('det.*', 'serv.descripcion as servicio')
            ->get();
        $tratamiento = Tratamiento::findOrFail($id);

        return view('admin.tratamiento.edit', ["detalles" => $detalles, "tratamiento" => $tratamiento]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'descripcion' => 'required|max:30',
            'fechar' => 'required',
            'plazo' => 'required'
        ]);
        $requestData = $request->all();

        $tratamiento = Tratamiento::findOrFail($id);
        $tratamiento->update($requestData);

        return redirect('admin/tratamiento')->with('flash_message', 'Tratamiento updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $tratamiento = Tratamiento::findOrFail($id);

        $tratamiento->estado = false;
        $tratamiento->save();

        return redirect('admin/tratamiento')->with('flash_message', 'Tratamiento deleted!');
    }
}
