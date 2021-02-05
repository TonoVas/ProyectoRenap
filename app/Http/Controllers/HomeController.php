<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('soloadmin',['only'=>'index']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function getUser()
    {
       
        return view('user');
    }
    
    public function store( Request $request)
    {
      /*  $dato = new Solicitante();
        $dato->CUI = $request->CUI;
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
            'CUI'=>$dato['CUI'],
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
        $dato = User::create([
            'name'=>$dato['name'],
            'email'=>$dato['email'],
            'password'=>$passwordcrypt,
        ]);
       return redirect()->route( 'create', compact('dato'));*/
    }
    public function estado($estado)
    {
        $estado = User::find($estado);
        return view( 'user', compact('estado')); 
        
    }
   
}
