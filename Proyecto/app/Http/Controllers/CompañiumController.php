<?php

namespace App\Http\Controllers;

use App\Models\Compañium;
use Illuminate\Http\Request;

/**
 * Class CompañiumController
 * @package App\Http\Controllers
 */
class CompañiumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $compañia = Compañium::paginate();

        return view('compañia.index', compact('compañia'))
            ->with('i', (request()->input('page', 1) - 1) * $compañia->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $compañium = new Compañium();
        return view('compañia.create', compact('compañium'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Compañium::$rules);

        $compañium = Compañium::create($request->all());

        return redirect()->route('compañia.index')
            ->with('success', 'Compañium created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $compañium = Compañium::find($id);

        return view('compañia.show', compact('compañium'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $compañium = Compañium::find($id);

        return view('compañia.edit', compact('compañium'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Compañium $compañium
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Compañium $compañium)
    {
        request()->validate(Compañium::$rules);

        $compañium->update($request->all());

        return redirect()->route('compañia.index')
            ->with('success', 'Compañium updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $compañium = Compañium::find($id)->delete();

        return redirect()->route('compañia.index')
            ->with('success', 'Compañium deleted successfully');
    }
}
