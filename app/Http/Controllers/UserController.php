<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     * GET
     */
    public function index()
    {
        $users = User::all();
        dd($users);
    }

    /**
     * Show the form for creating a new resource.
     * Retornar la vista con el formulario para la creación del elemento con los registros que requiera. // alimentar la vista
     * GET
     */
    public function create()
    {
        $roles = Role::all();
        dd($roles);
    }

    /**
     * Store a newly created resource in storage.
     * Recibir solicitud del formulario de creación del elemento y creación del registro
     * POST
     */
    public function store(Request $request)
    {
        $user = new User;

        $user->fullname = $request->fullname;
        $user->email = $request->email;
        $user->phone = $request->phone;
        // $user->photo = $request->phone;
        $user->password = bcrypt($request->password);
        $user->role_id = $request->role_id;
        if($user->save()){
            //redireccionar a la vista index
        }
    }

    /**
     * Display the specified resource.
     * GET
     */
    public function show(string $id)
    {
        $user = User::find($id);
        dd($user);
    }

    /**
     * Show the form for editing the specified resource.
     * GET
     */
    public function edit(string $id)
    {
        $user = User::find($id);
        dd($user);
    }

    /**
     * Update the specified resource in storage.
     * PUT
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        $user->fullname = $request->fullname;
        $user->email = $request->email;
        $user->phone = $request->phone;
        // $user->photo = $request->phone;
        $user->password = bcrypt($request->password);
        $user->role_id = $request->role_id;
        if($user->save()){
            //redireccionar a la vista index
        }
    }

    /**
     * Remove the specified resource from storage.
     * DELETE
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();
    }
}
