<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users=DB::table('Usuarios')->get();
        return view('layouts/home', ['msg'=>null,'users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required|max:199',
            'email'=>'required|email',
            'phone'=>'required|',
            'edad'=>'required|',

        ]);

        DB::table('Usuarios')->insert([
            'name'=>$request->input('nombre'),
            'email'=>$request->input('email'),
            'phone'=>$request->input('phone'),
            'age'=>$request->input('edad'),

        ]);

        return view('layouts/home', ['msg'=>'Registro Guardado','users' => DB::table('Usuarios')->get()]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $userCount = DB::table('Usuarios')
        ->where('id', $id)
        ->update([
            'name' => $request->input('nombre'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'age' => $request->input('edad'),
        ]);

        if ($userCount === 0) {
            $msg = 'Usuario no encontrado';
        } else {
            $msg = 'Usuario actualizado exitosamente';
        }

        return view('layouts/home', ['msg' => $msg, 'users' => DB::table('Usuarios')->get()]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $userCount = DB::table('Usuarios')
        ->where('id', $id)
        ->delete();

        if ($userCount === 0) {
            $msg = 'Usuario no encontrado';
        } else {
            $msg = 'Usuario eliminado exitosamente';
        }
        
        return view('layouts/home', ['msg' => $msg, 'users' => DB::table('Usuarios')->get()]);
    }
}
