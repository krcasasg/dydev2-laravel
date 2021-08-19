<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Usuari;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuariController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuari::all();
        return view('admin.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
           //Todo
        ]);
        $user_finder = User::where('email', $request->input('USUARI_Correo___b'))->first();

        //crear usuario para login
        if(null == $user_finder){
            $user = [
                'name' => $request->input('USUARI_Nombre____b'),
                'email' => $request->input('USUARI_Correo___b'),
                'password' => Hash::make($request->input('USUARI_Identific_b'))
            ];

            User::create($user);
        }
        //crear usuario para tabla usuari
        $usuario = [
            'USUARI_Nombre____b' => $request->input('USUARI_Nombre____b'),
            'USUARI_Correo___b' => $request->input('USUARI_Correo___b'),
            'USUARI_Identific_b' => $request->input('USUARI_Identific_b'),
            'USUARI_Clave_____b' => $request->input('USUARI_Clave_____b'),
            'USUARI_Cargo_____b' => $request->input('USUARI_Cargo_____b'),
        ];
        //almacena la foto
        var_dump($request->file('foto_upload'));
        if($logo = $request->file('foto_upload')){
            $filename = $logo->getClientOriginalName();
            $logo->move(public_path('images/logos'), $filename);
            $usuario['USUARI_Foto______b'] = $filename;
            //dd($filename);
        }

        //insertar todos los horarios
        if(null != ($request->input('USUARI_HorIniLun_b'))){
            $usuario['USUARI_HorIniLun_b'] = $request->input('USUARI_HorIniLun_b');
        }
        if(null != ($request->input('USUARI_HorFinLun_b'))){
            $usuario['USUARI_HorFinLun_b'] = $request->input('USUARI_HorFinLun_b');
        }
        if(null != ($request->input('USUARI_HorIniMar_b'))){
            $usuario['USUARI_HorIniMar_b'] = $request->input('USUARI_HorIniMar_b');
        }
        if(null != ($request->input('USUARI_HorFinMar_b'))){
            $usuario['USUARI_HorFinMar_b'] = $request->input('USUARI_HorFinMar_b');
        }
        $usuario_find = Usuari::where('USUARI_Correo___b', $request->input('USUARI_Correo___b'))->first();

        if(null == $usuario_find){
            if(DB::table('usuari')->insertGetId($usuario)){
                return redirect()->back()->with('success', 'Usuario Creado');
            }
        }else{
            return redirect()->back()->with('fail', 'Usuario existente');
        }



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuari  $usuari
     * @return \Illuminate\Http\Response
     */
    public function show(Usuari $usuari)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usuari  $usuari
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuari $usuari)
    {
        $usuario = $usuari;
        return view('admin.edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuari  $usuari
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuari $usuari)
    {
        $request->validate([
            //Todo
        ]);
        $user_finder = User::where('email', $request->input('USUARI_Correo___b'))->first();

        //crear usuario para login
        if(null == $user_finder){
            $user = [
                'name' => $request->input('USUARI_Nombre____b'),
                'email' => $request->input('USUARI_Correo___b'),
                'password' => Hash::make($request->input('USUARI_Identific_b'))
            ];

            User::where('email',$request->input('USUARI_Correo___b'))->update($user);
        }
        //crear usuario para tabla usuari
        $usuario = [
            'USUARI_Nombre____b' => $request->input('USUARI_Nombre____b'),
            'USUARI_Correo___b' => $request->input('USUARI_Correo___b'),
            'USUARI_Identific_b' => $request->input('USUARI_Identific_b'),
            'USUARI_Clave_____b' => $request->input('USUARI_Clave_____b'),
            'USUARI_Cargo_____b' => $request->input('USUARI_Cargo_____b'),
        ];
        //almacena la foto
        if($logo = $request->file('foto_upload')){
            $filename = $logo->getClientOriginalName();
            $logo->move(public_path('images/logos'), $filename);
            $usuario['USUARI_Foto______b'] = $filename;
            //dd($filename);
        }

        //insertar todos los horarios
        if(null != ($request->input('USUARI_HorIniLun_b'))){
            $usuario['USUARI_HorIniLun_b'] = $request->input('USUARI_HorIniLun_b');
        }
        if(null != ($request->input('USUARI_HorFinLun_b'))){
            $usuario['USUARI_HorFinLun_b'] = $request->input('USUARI_HorFinLun_b');
        }
        if(null != ($request->input('USUARI_HorIniMar_b'))){
            $usuario['USUARI_HorIniMar_b'] = $request->input('USUARI_HorIniMar_b');
        }
        if(null != ($request->input('USUARI_HorFinMar_b'))){
            $usuario['USUARI_HorFinMar_b'] = $request->input('USUARI_HorFinMar_b');
        }
        $usuario_find = Usuari::where('USUARI_Correo___b', $request->input('USUARI_Correo___b'))->first();

        if(null !== $usuario_find){
            if(DB::table('usuari')->where('USUARI_Correo___b', $request->input('USUARI_Correo___b'))->update($usuario)){
                return redirect()->back()->with('success', 'Usuario Actualziado');
            }
        }else{
            return redirect()->back()->with('fail', 'Usuario no encontrado');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuari  $usuari
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuari $usuari)
    {
        $usuari->delete();
        return redirect()->route('usuari.index')->with('success', 'Usuario eliminada');
    }
}
