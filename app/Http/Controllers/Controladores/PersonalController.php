<?php

namespace App\Http\Controllers\Controladores;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Personal;
use App\User;
use Illuminate\Http\Request;

class PersonalController extends Controller
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
            $personal = Personal::where('nombre', 'LIKE', "%$keyword%")
                ->orWhere('apellido', 'LIKE', "%$keyword%")
                ->orWhere('ci', 'LIKE', "%$keyword%")
                ->orWhere('telefono', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $personal = Personal::_getPersonal()->paginate($perPage);
        }

        return view('admin.personal.index', compact('personal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.personal.create');
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
			'apellido' => 'required|max:50',
			'ci' => 'required|max:10',
			'telefono' => 'required|max:10'
		]);
        //return json_encode(array($request->email));

        Personal::create([
            'nombre' =>$request->nombre,
            'apellido' =>$request->apellido,
            'ci' =>$request->ci,
            'telefono' =>$request->telefono,                        
            'estado'=>true,
        ]);

        User::create([
            'nick' =>$request->nombre,
            'email' =>$request->email,
            'password' =>bcrypt($request->telefono),
            'tipo' =>'personal',
            'estado' => TRUE,
        ]);

        return redirect('admin/personal')->with('flash_message', 'Personal added!');

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
        $personal = Personal::findOrFail($id);

        return view('admin.personal.show', compact('personal'));
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
        $personal = Personal::findOrFail($id);

        return view('admin.personal.edit', compact('personal'));
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
			'apellido' => 'required|max:50',
			'ci' => 'required|max:10',
			'telefono' => 'required|max:10'
		]);
        //$requestData = $request->all();
        
        $personal = Personal::findOrFail($id);
        $personal->nombre = $request->get('nombre');
        $personal->apellido = $request->get('apellido');
        $personal->ci = $request->get('ci');
        $personal->telefono = $request->get('telefono');
        $personal->update();
        //$personal->update($requestData);

        return redirect('admin/personal')->with('flash_message', 'Personal updated!');
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
        $personal = Personal::findOrFail($id);

        $personal->estado = false;
        $personal->save();


        return redirect('admin/personal')->with('flash_message', 'Personal deleted!');
    }
}
