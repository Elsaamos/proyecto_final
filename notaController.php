<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\nota;

class notaController extends Controller
{
    public function index(){
        $Notas = nota::paginate(10);
        return view('notaTable')->with('notas', $Notas);
    }

    public function show($id){
        $Notas = nota::findOrfail($id);
        return view('notaIndividual')->with('nota', $Notas);
    }

    public function create (){
        return view('formularioNota');
    }

    public function store (Request $request) {

        //VALIDAR

        $request->validate([
            'texto_nota'=>'required|',
            'fecha_y_hora'=>'required|alpha',
            'contacto_id'=>'required|numeric|unique:eventos, contacto_id'
        ]);
        $nuevaNota = new nota();

        //Formulario
        $nuevaNota->texto_nota = $request->input('texto_nota');
        $nuevaNota->fecha_y_hora = $request->input('fecha_y_hora');
        $nuevaNota->contacto_id = $request->input('contacto_id');
        //Fuente Externa
        $nuevaNota->nombre = 'juan';

        $creado = $nuevaNota->save();

        if ($creado) {
            return redirect()->route('nota.index')
                ->with('mensaje', 'la nota fue creada exitosamente.'); //mensaje de guardado
        }else{
            // TODO Retornar con un mensaje de error.
        }

    }

    //Editar nota
    public function edit($id) {
        $Notas = nota::findOrFail($id);
         return view('formularioeditNota')->with('nota', $Notas);
    }

    public function update(Request $request, $id) {

        //VALIDAR
        $request->validate([
            'texto_nota'=>'required|',
            'fecha_y_hora'=>'required|',
            'contacto_id'=>'required|numeric|min:0|max:100',
            
        ]);

        $Notas = nota::findOrFail($id);

        //Formulario
        $Notas->texto_nota = $request->input('texto_nota');
        $Notas->fecha_y_hora = $request->input('fecha_y_hora');
        $Notas->contacto_id = $request->input('contadto_id');

        //Fuente Externa
        $Notas->nombre = 'juan';

        $creado = $Notas->save();

        if ($creado) {
            return redirect()->route('nota.index')
                ->with('mensaje', 'la nota fue modificada exitosamente.'); //mensaje de modificacion
        }else{
            // TODO Retornar con un mensaje de error.
        }

    }

    //ELIMINAR
    public function destroy($id) {
        

        nota::destroy($id);

        //Redirigir

        return redirect('notas/')->with('mensaje', 'nota eliminada exitosamente');
    }
}
 