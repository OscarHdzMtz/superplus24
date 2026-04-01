<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserFormRequest;
use App\Http\Requests\UserEditFormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    private function checkAdmin()
    {
        if (!Auth::user()->tieneRolNombre('Administrador')) {
            abort(403, 'No tiene permiso para acceder a esta página.');
        }
    }

    private function getCachedRoles()
    {
        return Cache::remember('all_roles', 600, fn() => Role::all());
    }

    public function index(Request $request)
    {
        $this->checkAdmin();

        $query = trim($request->get('search'));

        $users = User::with('roles')
            ->where('name', 'LIKE', '%' . $query . '%')
            ->orderBy('id', 'asc')
            ->simplePaginate(5);

        return view('usuarios.index', ['users' => $users, 'search' => $query]);
    }

    public function create()
    {
        $this->checkAdmin();
        return view('usuarios.create', ['roles' => $this->getCachedRoles()]);
    }

    public function store(UserFormRequest $request)
    {
        $this->checkAdmin();

        $usuario = new User();
        $usuario->name = request('name');
        $usuario->email = request('email');
        $usuario->password = bcrypt(request('password'));
        $usuario->save();
        $usuario->asignarRol($request->get('rol'));

        return redirect('usuarios');
    }

    public function show($id)
    {
        return view('usuarios.show', ['user' => User::findOrFail($id)]);
    }

    public function edit($id)
    {
        $this->checkAdmin();

        $user = User::findOrFail($id);
        return view('usuarios.edit', ['user' => $user, 'roles' => $this->getCachedRoles()]);
    }

    public function update(UserEditFormRequest $request, $id)
    {
        $this->checkAdmin();

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

        $role = $usuario->roles;
        if (count($role) > 0) {
            $role_id = $role[0]->id;
            User::find($id)->roles()->updateExistingPivot($role_id, ['role_id' => $request->get('rol')]);
        } else {
            $usuario->asignarRol($request->get('rol'));
        }

        $usuario->update();

        return redirect('/usuarios');
    }

    public function destroy($id)
    {
        $this->checkAdmin();

        $usuario = User::findOrFail($id);
        $usuario->roles()->detach();
        $usuario->delete();

        return redirect('/usuarios');
    }
}
