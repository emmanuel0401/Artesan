<?php

namespace App\Http\Controllers;

use App\Artesanias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArtesaniasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $request->user()->authorizeRoles(['admin']);
        $datos['artesanias']=artesanias::paginate(5);
       return view('artesanias.index', $datos);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('artesanias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $datosArtesania=request()->all();
        $datosArtesania=request()->except('_token');
        
        if($request->hasFile('Foto')){
        $datosArtesania['Foto']=$request->File('Foto')->store('uploads','public');
    }
    Artesanias::insert($datosArtesania);
    return response()->json($datosArtesania);
   return redirect()->route('artesanias.index')->with('success', 'Cliente registrado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Artesanias  $artesanias
     * @return \Illuminate\Http\Response
     */
    public function show(Artesanias $artesanias)
    {
        //return view('productos.catalogo', $datos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Artesanias  $artesanias
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $artesania=Artesanias::findOrFail($id);
        return view('artesanias.edit', compact('artesania'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Artesanias  $artesanias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosArtesania=request()->except(['_token', '_method']);
        
        if($request->hasFile('foto')){
            $artesania=Artesanias::findOrFail($id);
            Storage::delete('public/.$artesanias->foto');
            $datosArtesania['foto']=$request->File('foto')->store('uploads','public');
        }

        Artesanias::where('id','=',$id)->update($datosArtesania);

        $artesania=Artesanias::findOrFail($id);
        return view('artesanias.edit', compact('artesania'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Artesanias  $artesanias
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Artesanias::destroy($id);
        return redirect('Artesanias');
    }
}
