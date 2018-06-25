<?php

namespace App\Http\Controllers\Controladores;

use App\Estado;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Ficha;
use App\Mascotum;
use Illuminate\Http\Request;

class FichaController extends Controller
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
            $ficha = Ficha::where('fecha', 'LIKE', "%$keyword%")
                ->orWhere('idEstado', 'LIKE', "%$keyword%")
                ->orWhere('idMascota', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $ficha = Ficha::_getFichas()->paginate($perPage);
        }

        return view('admin.ficha.index', compact('ficha'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $estado = Estado::_getEstados()->get();
        $mascota = Mascotum::_getMascotas()->get();
        //return json_encode(array('s'=>$mascota));
        return view('admin.ficha.create',compact('estado','mascota'));
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
			'fecha' => 'required'
		]);
        Ficha::create([
            'fecha' =>$request->fecha,
            'idestado' =>$request->estado,
            'idmascota' =>$request->mascota,
            'estado'=>true,
        ]);

        return redirect('admin/detalle/create')->with('flash_message', 'Ficha added!');
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
        //$ficha = Ficha::findOrFail($id);
        $ficha = Ficha::_getFichaDetalle($id)->get()->first();
      //  return json_encode(array('key'=>$ficha));
        return view('admin.ficha.show', compact('ficha'));
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
        $ficha = Ficha::findOrFail($id);

        return view('admin.ficha.edit', compact('ficha'));
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
			'fecha' => 'required'
		]);
        $requestData = $request->all();
        
        $ficha = Ficha::findOrFail($id);
        $ficha->update($requestData);

        return redirect('admin/ficha')->with('flash_message', 'Ficha updated!');
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
        $ficha = Ficha::findOrFail($id);

        $ficha->estado = false;
        $ficha->save();

        return redirect('admin/ficha')->with('flash_message', 'Ficha deleted!');
    }
}
