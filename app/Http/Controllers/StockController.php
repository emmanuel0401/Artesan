<?php

namespace App\Http\Controllers;

use App\Artesanias;
use Illuminate\Http\Request;
use DB;

class StockController extends Controller
{
    public function index(Request $request)
    {
        //
        $datos['artesanias']=artesanias::paginate(12);
        return view('Mysql.stock', $datos);
    }

    public function storeprocedure()
    {
        $artesanias = DB::select("call tipoArtesania('pulsera')");
        return view("Mysql.procedure")->with('artesanias', $artesanias);
    }

    public function show()
    {
    $usuarios =DB::table('usuarios')->select ('id', 'name', 'email', 'address');
    return view('Mysql.respaldo', compact('usuarios'));
    }
}
