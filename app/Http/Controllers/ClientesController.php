<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
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
        $datos['cliente']=Cliente::paginate(10);
        return view('clientes.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
    $datosClientes=request()->all();
    $datosClientes=request()->except('_token');
    cliente::insert($datosClientes);
    /* $validatedData = $request->validate([
        'nombre' => 'required|max:255',
         'correo' => 'required|alpha_num',
         'telefono' => 'required|numeric',
         'direccion' => 'required|alpha_num',
         'contraseña' => 'required|alpha_num',
         'reescribe' => 'required|numeric',
     ]);  
 $cliente = cliente::create($validatedData);
*/
     return response()->json($datosClientes);
     return redirect('Cliente.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $cliente=Cliente::findOrFail($id);
    return view('clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosClientes=request()->except(['_token', '_method']);
        Cliente::where('id','=',$id)->update($datosClientes);

        $cliente=Cliente::findOrFail($id);
        return view('clientes.edit', compact('cliente'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Cliente::destroy($id);
        return redirect('Cliente');
    }
}
