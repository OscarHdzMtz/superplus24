<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserFormRequest;
use App\Http\Requests\UserEditFormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {

        $roles = Role::all();

        // Obtener el usuario autenticado
        $userlogued = Auth::user();

        // Realizar la consulta para obtener los roles del usuario
        $userRoles = $userlogued->roles->pluck('name');

        // Verificar si el usuario tiene el rol 'Administrador'
        if ($userRoles->contains('Administrador')) {

            if ($request) {

                $query = trim($request->get('search'));

                $users = User::where('name', 'LIKE', '%' . $query . '%')
                    ->orderBy('id', 'asc')
                    ->simplePaginate(5);

                return view('usuarios.index', ['users' => $users, 'search' => $query]);
            }
            
        } else {
            // El usuario no tiene el rol 'Administrador', mostrar un error de permiso
            abort(403, 'No tiene permiso para acceder a esta página.');
        }

        /*$users = User::all();
        return view('usuarios.index',['users' => $users]);*/
    }

    public function create()
    {
        $roles = Role::all();

        // Obtener el usuario autenticado
        $user = Auth::user();

        // Realizar la consulta para obtener los roles del usuario
        $userRoles = $user->roles->pluck('name');

        // Verificar si el usuario tiene el rol 'Administrador'
        if ($userRoles->contains('Administrador')) {

            return view('usuarios.create', ['roles' => $roles]);
        } else {
            // El usuario no tiene el rol 'Administrador', mostrar un error de permiso
            abort(403, 'No tiene permiso para acceder a esta página.');
        }
    }

    public function store(UserFormRequest $request)
    {

        $roles = Role::all();

        // Obtener el usuario autenticado
        $user = Auth::user();

        // Realizar la consulta para obtener los roles del usuario
        $userRoles = $user->roles->pluck('name');

        // Verificar si el usuario tiene el rol 'Administrador'
        if ($userRoles->contains('Administrador')) {

            $usuario = new User();

            $usuario->name = request('name');
            $usuario->email = request('email');
            $usuario->password = bcrypt(request('password'));

            $usuario->save();

            $usuario->asignarRol($request->get('rol'));

            return redirect('usuarios');
        } else {
            // El usuario no tiene el rol 'Administrador', mostrar un error de permiso
            abort(403, 'No tiene permiso para acceder a esta página.');
        }
    }

    public function show($id)
    {
        return view('usuarios.show', ['user' => User::findOrFail($id)]);
    }

    public function edit($id)
    {

        $roles = Role::all();

        // Obtener el usuario autenticado
        $user = Auth::user();

        // Realizar la consulta para obtener los roles del usuario
        $userRoles = $user->roles->pluck('name');

        // Verificar si el usuario tiene el rol 'Administrador'
        if ($userRoles->contains('Administrador')) {

            $user = User::findOrFail($id);

            $roles = Role::all();

            return view('usuarios.edit', ['user' => $user, 'roles' => $roles]);
        } else {
            // El usuario no tiene el rol 'Administrador', mostrar un error de permiso
            abort(403, 'No tiene permiso para acceder a esta página.');
        }
    }

    public function update(UserEditFormRequest $request, $id)
    {

        $roles = Role::all();

        // Obtener el usuario autenticado
        $user = Auth::user();

        // Realizar la consulta para obtener los roles del usuario
        $userRoles = $user->roles->pluck('name');

        // Verificar si el usuario tiene el rol 'Administrador'
        if ($userRoles->contains('Administrador')) {

            $this->validate(request(), ['email' => ['required', 'email', 'max:225', 'unique:users,email,' . $id]]);

            $usuario = User::findOrFail($id);

            $usuario->name = $request->get('name');

            $usuario->email = $request->get('email');

            $pass = $request->get('password');

            if ($pass != null) {

                $usuario->password = bcrypt($request->get('password'));
            } else {

                unset($usuario->password);
            }
            //modiificamos esta parte paar que actualice roles y usuarios
            //si tiene rol actualizamos 
            //si no tiene rol se le asigna uno
            $role = $usuario->roles;

            if (count($role) > 0) {

                $role_id = $role[0]->id;

                User::find($id)->roles()->updateExistingPivot($role_id, ['role_id' => $request->get('rol')]);
            } else {

                $usuario->asignarRol($request->get('rol'));
            }

            $usuario->update();

            return redirect('/usuarios');
        } else {
            // El usuario no tiene el rol 'Administrador', mostrar un error de permiso
            abort(403, 'No tiene permiso para acceder a esta página.');
        }
    }

    public function destroy($id)
    {

        $roles = Role::all();

        // Obtener el usuario autenticado
        $user = Auth::user();

        // Realizar la consulta para obtener los roles del usuario
        $userRoles = $user->roles->pluck('name');

        // Verificar si el usuario tiene el rol 'Administrador'
        if ($userRoles->contains('Administrador')) {

            $usuario = User::findOrFail($id);
            // Eliminar los registros relacionados en la tabla role_user
            $usuario->roles()->detach();

            $usuario->delete();

            return redirect('/usuarios');
        } else {
            // El usuario no tiene el rol 'Administrador', mostrar un error de permiso
            abort(403, 'No tiene permiso para acceder a esta página.');
        }
    }
}
