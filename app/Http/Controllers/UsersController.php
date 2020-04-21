<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['admin']);
        $datos['user']=user::paginate(10);
       return view('usuarios.usuarios', $datos);


        //$users = users::all();
        //return view('auth.usuarios', ['usuarios' => $users]);

        //$users = User::all();
        //return view('auth.usuarios', compact('users'));

        //$users = DB::table('users')->get();
        //return view('auth.usuarios')->with(['users'=>$users]);
    }

    //public function store(Request $request)
    //{
    //$datosUsers=request()->all();
    //$datosUsers=request()->except('_token');
    //cliente::insert($datosUsers);
    //return response()->json($datosUsers);
    //return redirect('usuarios');
    //}


    public function edit($id){
       
        $user=User::findOrFail($id);
        return view('usuarios.edit', compact('user'));
    }



    public function update(Request $request, $id)
    {
        //
        $datosUser=request()->except(['_token', '_method']);
        User::where('id','=',$id)->update($datosUser);

        $user=User::findOrFail($id);
        return view('usuarios.edit', compact('user'));
    }



    public function destroy($id)
    {
        //
        User::destroy($id);
        return redirect('usuarios');
    }

}
