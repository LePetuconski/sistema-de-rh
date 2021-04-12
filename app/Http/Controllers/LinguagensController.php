<?php

namespace App\Http\Controllers;

use App\Models\Linguagem;
use Illuminate\Http\Request;

class LinguagensController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $linguagens = Linguagem::all();

        return view('listAllLinguagens', [
            'linguagens' => $linguagens
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('AddLinguagem');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $linguagem = new Linguagem();
        $linguagem->nomeLinguagem = $request->nomeLinguagem;
        
       
        $linguagem->save();

        return redirect()->route('linguagem.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Linguagem  $linguagem
     * @return \Illuminate\Http\Response
     */
    public function show(Linguagem $linguagem)
    {
        return view('listLinguagens', [
            'linguagem' => $linguagem
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Linguagem  $linguagem
     * @return \Illuminate\Http\Response
     */
    public function edit(Linguagem $linguagem)
    {
        return view('editLinguagem', [
            'linguagem' => $linguagem
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Linguagem  $linguagem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Linguagem $linguagem)
    {
        $linguagem->nomeLinguagem = $request->nomeLinguagem;
        

        $linguagem->save();

        return redirect()->route('linguagem.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Linguagem  $linguagem
     * @return \Illuminate\Http\Response
     */
    public function destroy(Linguagem $linguagem)
    {
        $linguagem->delete();
        return redirect()->route('linguagens.index');
    }
}
