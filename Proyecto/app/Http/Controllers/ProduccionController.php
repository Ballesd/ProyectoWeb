<?php

namespace App\Http\Controllers;

use App\Models\Produccion;
use App\Models\Empleado;
use Illuminate\Http\Request;

/**
 * Class ProduccionController
 * @package App\Http\Controllers
 */
class ProduccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produccions = Produccion::paginate();

        return view('produccion.index', compact('produccions'))
            ->with('i', (request()->input('page', 1) - 1) * $produccions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $produccion = new Produccion();
        $empleado = Empleado::pluck('nombre','id');
        return view('produccion.create', compact('produccion','empleado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Produccion::$rules);

        $produccion = Produccion::create($request->all());

        return redirect()->route('produccion.index')
            ->with('success', 'Producción añadida.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produccion = Produccion::find($id);

        return view('produccion.show', compact('produccion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produccion = Produccion::find($id);
        $empleado = Empleado::pluck('nombre','id');
        return view('produccion.edit', compact('produccion','empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Produccion $produccion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produccion $produccion)
    {
        request()->validate(Produccion::$rules);

        $produccion->update($request->all());

        return redirect()->route('produccion.index')
            ->with('success', 'Producción editada');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $produccion = Produccion::find($id)->delete();

        return redirect()->route('produccion.index')
            ->with('success', 'Producción borrada');
    }
}
