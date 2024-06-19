<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use DB;
use App\Models\Persona;
use App\Http\Requests\CreatePersonaRequest;

class PersonasController extends Controller
{
    public function index()
    {
        /* $personas = DB::table('personas')->get(); */
        /* $personas = Persona::get(); */
        $personas = Persona::latest()->paginate();
        return view('personas', compact('personas'));
    }

    public function show($nPerCodigo = 0)
    {
        return Persona::where('nPerCodigo', $nPerCodigo)->first();
        /*  return view('show', [
             'persona' => Persona::where('nPerCodigo', $nPerCodigo)->first()
         ]); */
    }

    public function create()
    {
        return view('create');
    }

    public function store()
    {
        /*      //variables
             $cPerApellidos = request('Apellido');
             $cPerNombre = request('Nombre');
             $cPerDireccion = request('Direccion');
             $dPerFecNac = request('FecNac');
             $nPerEdad = request('edad');
             $nPerSueldo = request('Sueldo');
             $cPerEstado = request('estado'); */

        //Almacenamos en la DB



        $camposV = request()->validate([
            'cPerApellidos' => 'required',
            'cPerNombre' => 'required',
            'cPerDireccion' => 'required',
            'dPerFecNac' => 'required',
            'nPerEdad' => 'required',
            'nPerSueldo' => 'required',
            'cPerEstado' => 'required'
        ]);

        Persona::create($camposV);

        /* Persona::create([
            'cPerApellidos' => $cPerApellidos,
            'cPerNombre' => $cPerNombre,
            'cPerDireccion' => $cPerDireccion,
            'dPerFecNac' => $dPerFecNac,
            'nPerEdad' => $nPerEdad,
            'nPerSueldo' => $nPerSueldo,
            'cPerEstado' => $cPerEstado
        ]); */

        //redireccionamos a la vista index
        return redirect()->route('personas.index');
    }

}
