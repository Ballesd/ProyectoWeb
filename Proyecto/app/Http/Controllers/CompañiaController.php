<?php

namespace App\Http\Controllers;

use App\Models\Compañia;
use Illuminate\Http\Request;

/**
 * Class CompañiaController
 * @package App\Http\Controllers
 */
class CompañiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $compañias = Compañia::paginate();

        return view('compañia.index', compact('compañias'))
            ->with('i', (request()->input('page', 1) - 1) * $compañias->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $compañia = new Compañia();
        return view('compañia.create', compact('compañia'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Compañia::$rules);

        $compañia = Compañia::create($request->all());

        return redirect()->route('compañia.index')
            ->with('success', 'Compañia añadida.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $compañia = Compañia::find($id);

        return view('compañia.show', compact('compañia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $compañia = Compañia::find($id);

        return view('compañia.edit', compact('compañia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Compañia $compañia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Compañia $compañia)
    {
        request()->validate(Compañia::$rules);

        $compañia->update($request->all());

        return redirect()->route('compañia.index')
            ->with('success', 'Compañia editada correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $compañia = Compañia::find($id)->delete();

        return redirect()->route('compañia.index')
            ->with('success', 'Compañia borrada exitosamente');
    }
}
