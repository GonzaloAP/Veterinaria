<?php

namespace App\Http\Controllers\Controladores;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Detalle;
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
        return view('admin.detalle.create');
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
        
        Detalle::create([
            'idFicha' => $request->idFicha,
            'idServicio' => $request->idServicio,
            'estado'=>true,

        ]);

        return redirect('admin/detalle')->with('flash_message', 'Detalle added!');
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

        return view('admin.detalle.edit', compact('detalle'));
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
        
        $requestData = $request->all();
        
        $detalle = Detalle::findOrFail($id);
        $detalle->update($requestData);

        return redirect('admin/detalle')->with('flash_message', 'Detalle updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($idFicha)
    {
       
        
        return redirect('admin/detalle')->with('flash_message', 'Detalle eliminado!');
    }
}
