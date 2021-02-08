<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Solicitante;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function __construct()
    {
        //Hola Mundo ...
        $this->middleware('soloadmin',['only'=>'index']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dato = Solicitante::all();

        $data = User::all();

        return view('solicitante', compact('dato', 'data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /**$request->Validator::make([
            'FechaDeNacimineto' => 'required|after_or_equal:FechaDeNacimineto',
            'Telefono' =>  'numeric|required|unique:personas|min:100000|max:99999999',
            'Fotografia'=>'sometimes|max:100000|mimes:jpg,png,jpeg,gif',
        ]);*/
        $dato = new Solicitante();
        $Cedula = 0;
        $Cedula = substr(str_shuffle("1234567890"),0,14);
        $dato->FechaDeNacimineto = $request->FechaDeNacimineto ;
        $dato->name = $request->name ;
        $dato->Apellido = $request->Apellido ;
        $dato->Direccion = $request->Direccion ;
        $dato->Telefono = $request->Telefono ;
        $Departamento = "" ;
        $type = $request['type'];

        switch ($type) {
            case 1:
                $Departamento = "Alta Verapaz" ;
                break;
            case 2:
                $Departamento = "Baja Verapaz" ;
                break;
            case 3:
                $Departamento = "Chimaltenango" ;
                break;
            case 4:
                $Departamento = "Chiquimula" ;
                break;
            case 5:
                $Departamento = "Petén" ;
                break;
            case 6:
                $Departamento = "Progreso" ;
                break;
            case 7:
                $Departamento = "Quiché" ;
                break;
            case 8:
                $Departamento = "Escuintla" ;
                break;
            case 9:
                $Departamento = "Guatemala" ;
                break;
            case 10:
                $Departamento = "Huehuetenango" ;
                break;
            case 11:
                $Departamento = "Izabal" ;
                break;
            case 12:
                $Departamento = "Jalapa" ;
                break;
            case 13:
                $Departamento = "Jutiapa" ;
                break;
            case 14:
                $Departamento = "Quetzaltenango" ;
                break;
            case 15:
                $Departamento = "Retalhuleu" ;
                break;
            case 16:
                $Departamento = "Sacatepéquez" ;
                break;
            case 17:
                $Departamento = "San Marcos" ;
                break;
            case 18:
                $Departamento = "Santa Rosa" ;
                break;
            case 19:
                $Departamento = "Sololá" ;
                break;
            case 20:
                $Departamento = "Suchitepéquez" ;
                break;
            case 21:
                $Departamento = "Totonicapán" ;
                break;
            case 22:
                $Departamento = "Zacapa" ;
                break;
        }



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
            'Departamento'=>$Departamento,
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



        //return $dato;
        return redirect()->route( 'create')->with('success', 'Guardado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($email)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dato = User::find($id);
        return view('user.edit')-> with('dato', $dato);
    }
    public function update(Request $request, $id)
    {
        $dato = User::find($id);
        $dato->name = $request->get('name');
        $dato->email = $request->get('email');
        $dato->password = $request->get('password');
        $fullacces= "no";
        $dato->fullacces= $fullacces;
        $estado = 0;
        $type = $request['type'];
        switch ($type) {
            case 1:
                $estado = 1;
                break;

            case 2:
                $estado = 2;
                break;

            default:
                $estado = 0;
                break;

                break;
        }

        $dato->estado = $estado;

        $dato->save();

        return $this->index();
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
}
