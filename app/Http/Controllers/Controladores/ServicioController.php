<?php

namespace App\Http\Controllers\Controladores;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Servicio;
use Illuminate\Http\Request;

class ServicioController extends Controller
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
            $servicio = Servicio::where('descripcion', 'LIKE', "%$keyword%")
                ->orWhere('precio', 'LIKE', "%$keyword%")
                ->orWhere('precioTotal', 'LIKE', "%$keyword%")
                ->orWhere('idPersonal', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $servicio = Servicio::_getServicios()->paginate($perPage);
        }

        return view('admin.servicio.index', compact('servicio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.servicio.create');
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
			'descripcion' => 'required',
			'precio' => 'required',
			'precioTotal' => 'required'
		]);
        Servicio::create([
            'descripcion' =>$request->descripcion,
            'precio' =>$request->precio,
            'precioTotal' =>$request->precioTotal,    
            'idPersonal' =>$request->idPersonal,
            'estado'=>true,
        ]);
        return redirect('admin/servicio')->with('flash_message', 'Servicio added!');
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
        $servicio = Servicio::findOrFail($id);

        return view('admin.servicio.show', compact('servicio'));
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
        $servicio = Servicio::findOrFail($id);

        return view('admin.servicio.edit', compact('servicio'));
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
        $this->validate($request, [
			'descripcion' => 'required',
			'precio' => 'required',
			'precioTotal' => 'required'
		]);
        $requestData = $request->all();
        
        $servicio = Servicio::findOrFail($id);
        $servicio->update($requestData);

        return redirect('admin/servicio')->with('flash_message', 'Servicio updated!');
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
        $servicio = Servicio::findOrFail($id);

        $servicio->estado = false;
        $servicio->save();

        return redirect('admin/servicio')->with('flash_message', 'Servicio deleted!');
    }
}
