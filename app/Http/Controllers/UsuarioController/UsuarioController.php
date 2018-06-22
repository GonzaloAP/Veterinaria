<?php

namespace App\Http\Controllers\UsuarioController;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use Illuminate\Http\Request;

class UsuarioController extends Controller
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
            $usuario = User::where('nick', 'LIKE', "%$keyword%")
                ->orWhere('email', 'LIKE', "%$keyword%")
                ->orWhere('password', 'LIKE', "%$keyword%")
                ->orWhere('tipo', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $usuario = User::_getUsuarios()->paginate($perPage);
        }

        return view('admin.usuario.index', compact('usuario'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        
        return view('admin.usuario.create');
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
			'nick' => 'required',
			'email' => 'required|max:50',
			'password' => 'required|max:20',
			'tipo' => 'required'
		]);      
        
        User::create([
            'nick' =>$request->nick,
            'email' =>$request->email,
            'password' =>bcrypt($request->password),
            'tipo' =>$request->tipo,            
            'estado' => TRUE,
        ]);
        return redirect('admin/usuario')->with('flash_message', 'Usuario Registrado!');
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
        $usuario = User::findOrFail($id);

        return view('admin.usuario.show', compact('usuario'));
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
        $usuario = User::findOrFail($id);

        return view('admin.usuario.edit', compact('usuario'));
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
			'nick' => 'required',
			'email' => 'required|max:50',
			'password' => 'required',
			'tipo' => 'required'
		]);
        $requestData = $request->all();
        
        $usuario = User::findOrFail($id);
        $usuario->update($requestData);

        return redirect('admin/usuario')->with('flash_message', 'Usuario updated!');
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
        $usuario = User::findOrFail($id);

        $usuario->estado = false;
        $usuario->save();

        return redirect('admin/usuario')->with('flash_message', 'Usuario deleted!');
    }
}
