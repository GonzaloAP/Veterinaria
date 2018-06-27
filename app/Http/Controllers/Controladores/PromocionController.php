<?php

namespace App\Http\Controllers\Controladores;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Promocion;
use App\Servicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PromocionController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;
        if (!empty($keyword)) {
            $promocion = Promocion::where('descripcion', 'LIKE', "%$keyword%")
                ->orWhere('descuento', 'LIKE', "%$keyword%")
                ->orWhere('idservicio', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);

        } else {
            $promocion = DB::table('servicio as serv')
                ->join('promocion as prom', 'prom.idservicio', '=', 'serv.id')
                ->select('prom.*', 'serv.descripcion as serv')
                ->latest()->paginate($perPage);
            //return $promocion;
        }

        return view('admin.promocion.index', compact('promocion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $servicios = Servicio::all()
            ->where('estado', '=', 1);
        return view('admin.promocion.create', ["servicios" => $servicios]);
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
            'descripcion' => 'required|max:80',
            'descuento' => 'required'
        ]);
        //return $request;
        //actualizar los valores de la tabla servicio (precio total)
        Promocion::create([
            'descripcion' => $request->descripcion,
            'descuento' => $request->descuento,
            'idservicio' => $request->idservicio,
            'estado' => true,
        ]);

        return redirect('admin/promocion')->with('flash_message', 'Promocion added!');
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
        $promocion = Promocion::findOrFail($id);

        return view('admin.promocion.show', compact('promocion'));
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
        $promocion = Promocion::findOrFail($id);
        $servicios = Servicio::all();
        return view('admin.promocion.edit', ["promocion" => $promocion, "servicios" => $servicios]);
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
            'descripcion' => 'required|max:80',
            'descuento' => 'required'
        ]);
        $requestData = $request->all();

        $promocion = Promocion::findOrFail($id);
        $promocion->update($requestData);

        return redirect('admin/promocion')->with('flash_message', 'Promocion updated!');
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
        $promocion = Promocion::findOrFail($id);

        $promocion->estado = false;
        $promocion->save();

        return redirect('admin/promocion')->with('flash_message', 'Promocion deleted!');
    }
}
