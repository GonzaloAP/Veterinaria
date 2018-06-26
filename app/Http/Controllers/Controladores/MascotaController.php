<?php

namespace App\Http\Controllers\Controladores;

use App\Cliente;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Mascotum;
use Illuminate\Http\Request;

class MascotaController extends Controller
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
            $mascota = Mascotum::where('nombre', 'LIKE', "%$keyword%")
                ->orWhere('especie', 'LIKE', "%$keyword%")
                ->orWhere('raza', 'LIKE', "%$keyword%")
                ->orWhere('sexo', 'LIKE', "%$keyword%")
                ->orWhere('edad', 'LIKE', "%$keyword%")
                ->orWhere('idCliente', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $mascota = Mascotum::_getMascotas()->paginate($perPage);
        }

        return view('admin.mascota.index', compact('mascota'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $cliente = Cliente::_getClientesId()->get();
       // return json_encode(array('key'=> $cliente));
        return view('admin.mascota.create',compact('cliente'));
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
			'nombre' => 'required|max:50',
			'especie' => 'required',
			'raza' => 'required|max:30',
			'sexo' => 'required',
            'edad' => 'required'
		]);

        Mascotum::create([
            'nombre' =>$request->nombre,
            'especie' =>$request->especie,
            'raza' =>$request->raza,
            'sexo' =>$request->sexo,            
            'edad' => $request->edad,
            'idcliente' => $request->cliente,
            'estado'=>true,
        ]);

        //return json_encode(array('ls'=>$request->cliente));
        return redirect('admin/mascota')->with('flash_message', 'Mascotum added!');
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
        $mascotum = Mascotum::findOrFail($id);

        return view('admin.mascota.show', compact('mascotum'));
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
        $mascotum = Mascotum::findOrFail($id);
        $cliente = Cliente::_getClientesId()->get();
        return view('admin.mascota.edit', compact('mascotum','cliente'));
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
			'nombre' => 'required|max:50',
			'especie' => 'required',
			'raza' => 'required|max:30',
			'sexo' => 'required',
			'edad' => 'required'
		]);
       // $requestData = $request->all();
        
        $mascotum = Mascotum::findOrFail($id);

        $mascotum->nombre = $request->get('nombre');
        $mascotum->especie = $request->get('especie');
        $mascotum->raza = $request->get('raza');
        $mascotum->sexo = $request->get('sexo');
        $mascotum->edad = $request->get('edad');
        $mascotum->idcliente = $request->get('cliente');
        $mascotum->update();

        //$mascotum->update($requestData);
        //return json_encode(array('s'=>$mascotum));
        return redirect('admin/mascota')->with('flash_message', 'Mascotum updated!');
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
        $mascota = Mascotum::findOrFail($id);

        $mascota->estado = false;
        $mascota->save();

        return redirect('admin/mascota')->with('flash_message', 'Mascotum deleted!');
    }
}
