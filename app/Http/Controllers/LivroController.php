<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

/**
 * Class LivroController
 * @package App\Http\Controllers
 */
class LivroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $livros = Livro::paginate();

        return view('livro.index', compact('livros'))
            ->with('i', (request()->input('page', 1) - 1) * $livros->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $livro = new Livro();
        return view('livro.create', compact('livro'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Livro::$rules);

        $livro = Livro::create($request->all());

        return redirect()->route('livros.index')
            ->with('success', 'Livro created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $livro = Livro::find($id);

        return view('livro.show', compact('livro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $livro = Livro::find($id);

        return view('livro.edit', compact('livro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Livro $livro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Livro $livro)
    {
        request()->validate(Livro::$rules);

        $livro->update($request->all());

        return redirect()->route('livros.index')
            ->with('success', 'Livro updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $livro = Livro::find($id)->delete();

        return redirect()->route('livros.index')
            ->with('success', 'Livro deleted successfully');
    }
}
