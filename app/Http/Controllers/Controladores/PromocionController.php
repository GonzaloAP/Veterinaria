<?php

namespace App\Http\Controllers\Controladores;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Promocion;
use Illuminate\Http\Request;

class PromocionController extends Controller
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
            $promocion = Promocion::where('descripcion', 'LIKE', "%$keyword%")
                ->orWhere('descuento', 'LIKE', "%$keyword%")
                ->orWhere('idServicio', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $promocion = Promocion::_getPromocion()->paginate($perPage);
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
        return view('admin.promocion.create');
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
        Promocion::create([
            'descripcion' =>$request->descripcion,
            'descuento' =>$request->descuento,
            'idServicio' =>$request->idServicio,
            'estado'=>true,
        ]);

        return redirect('admin/promocion')->with('flash_message', 'Promocion added!');
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
        $promocion = Promocion::findOrFail($id);

        return view('admin.promocion.show', compact('promocion'));
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
        $promocion = Promocion::findOrFail($id);

        return view('admin.promocion.edit', compact('promocion'));
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
     * @param  int  $id
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
