<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade as PDF;

use Spatie\Permission\Models\Role;
use App\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:create user'], ['only' => ['create', 'store']]);
        $this->middleware(['permission:read users'], ['only' => 'index']);
        $this->middleware(['permission:update user'], ['only' => ['edit', 'update']]);
        $this->middleware(['permission:delete user'], ['only' => 'delete']);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('name', 'like', '%'.Input::get('searchtext').'%')
        ->orWhere('email', 'like', '%'.Input::get('searchtext').'%')
        ->orderByDesc('id')
        ->paginate();


        return view('usuarios.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all()->pluck('name', 'id');

        return view('usuarios.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // dd($request->all());
        $usuario = new User;

        $usuario->name     = $request->name;
        $usuario->email    = $request->email;
        $usuario->password = bcrypt($request->password);

        if ($usuario->save()) {
          // asignar el rol
          $usuario->assignRole($request->roles);
        }

        if ($usuario instanceof Model) {
            toastr()->success('Almacenado correctamente!','Creado');
            return redirect()->route('usuarios.index');
        }

        toastr()->error('Ocurrió un error intenta de nuevo.','Error');

        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::findOrFail($id);

        $roles = Role::all()->pluck('name', 'id');

        return view('usuarios.edit', compact('users', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $usuario = User::findOrFail($id);

        $usuario->name     = $request->name;
        $usuario->email    = $request->email;
        $usuario->password = bcrypt($request->password);

        $usuario->syncRoles([$request->roles]);

        $usuario->save();

        if ($usuario instanceof Model) {
            toastr()->info('Actualizado correctamente!','Modificado');
            return redirect()->route('usuarios.index');
        }

        toastr()->error('Ocurrió un error intenta de nuevo.','Error');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = User::findOrFail($id);

        $usuario->removeRole($usuario->roles->implode('name', ', '));

        $usuario->delete();


        if ($usuario instanceof Model) {
            toastr()->error('Eliminado correctamente!','Borrado');
            return redirect()->route('usuarios.index');
        }

        toastr()->error('Ocurrió un error intenta de nuevo.','Error');

        return back();


    }
}
