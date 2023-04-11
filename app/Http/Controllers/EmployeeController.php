<?php

namespace App\Http\Controllers;

use App\Models\employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
        $trabajadores = employee::all();
        return view('admin.trabajadores.index', ['trabajadores' => $trabajadores]);
    }

    public  function create(){
        return view('admin.trabajadores.create');
    }

    public function store(Request $request){
        $request->validate([
            'fullname' => 'required|min:4|string|max:100',
            'run' => 'required|min:8|string|max:12',
            'direccion' => 'required|max:200|string|min:5',
            'fecha_nac' => 'required|date_format:Y-m-d',
            'estado_civil' => 'required|in:Casado(a),Conviviente,Separado(a),Viudo(a),Soltero(a)',
            'fono' => 'required|max:12|min:6'

        ], ['fullname.required' => 'El nombre completo es requerido',
            'run.required' => 'El run es requerido',
            'direccion.required' => 'La dirección es requerida',
            'fecha_nac.required' => 'La fecha de nacimiento es necesaria',
            'estado_civil.required' => 'Seleccione el estado civil',
            'fono.required' => 'El fono es requerido'

        ]);

        $run = employee::where(['rut' => $request->run])->count();
        if($run < 1){
            $trabajador = new employee;
            $trabajador->nombreCompleto = $request->fullname;
            $trabajador->rut = $request->run;
            $trabajador->direccion = $request->direccion;
            $trabajador->estadoCivil = $request->estado_civil;
            $trabajador->fecha_nac = $request->fecha_nac;
            $trabajador->email = $request->email;
            $trabajador->fono = $request->fono;
            $trabajador->save();

            $request->session()->flash('success', 'Trabajador registrado');
            return redirect(route('form.trabajador'));
         } else{
            $request->session()->flash('error', 'El RUN ingresado ya existe');
            return back();
         }
    }

    public function edit(){

    }

    public function update(){

    }

    public function destroy(){

    }


}




