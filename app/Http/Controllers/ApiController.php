<?php

namespace App\Http\Controllers;

use App\Models\Solicitante;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $user = User::all('estado');
        //$user->estado =;
        return $user;
    }


    public function store(Request $request)
    {
        $dato = new Solicitante();
        $Cedula = 0;
        $Cedula = substr(str_shuffle("1234567890"),0,14);
        $dato->FechaDeNacimineto = $request->FechaDeNacimineto ;
        $dato->name = $request->name ;
        $dato->Apellido = $request->Apellido ;
        $dato->Direccion = $request->Direccion ;
        $dato->Telefono = $request->Telefono ;
        $dato->Departamento = $request->Departamento ;




        $dato->Municipio = $request->Municipio ;
        $dato->Fotografia = $request->Fotografia ;
        if($request->hasFile('Fotografia')){
            $dato['Fotografia']=$request->file('Fotografia')->store('uploads','public');
       }
        $dato->email = $request->email ;
        $password = "";
        $password = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890"),rand(0,61),8);


        $dato = Solicitante::create([
            'Cedula'=>$Cedula,
            'FechaDeNacimineto'=>$dato['FechaDeNacimineto'],
            'name'=>$dato['name'],
            'Apellido'=>$dato['Apellido'],
            'Direccion'=>$dato['Direccion'],
            'Telefono'=>$dato['Telefono'],
            'Departamento'=>$dato['Departamento'],
            'Municipio'=>$dato['Municipio'],
            'Fotografia'=>$dato['Fotografia'],
            'email'=>$dato['email'],
            'password'=>$password,
        ]);

        $dato = new User();
        $dato->name = $request->name ;
        $dato->email = $request->email ;
        $passwordcrypt = Hash::make($password);
        $fullacces = "no";
        $estado=0;
        $dato = User::create([
            'name'=>$dato['name'],
            'email'=>$dato['email'],
            'password'=>$passwordcrypt,
            'fullacces'=>$fullacces,
            'estado'=>$estado,
        ]);

    return $dato;
    }
}
