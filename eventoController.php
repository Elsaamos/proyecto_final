<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\evento;

class eventoController extends Controller
{
    public function index(){
        $Eventos = evento::paginate(10);
        return view('eventoTable')->with('eventos', $Eventos);
    }

    public function show($id){
        $Eventos = evento::findOrfail($id);
        return view('eventoIndividual')->with('evento', $Eventos);
    }

    public function create (){
        return view('formularioEvento');
    }

    public function store (Request $request) {

        //VALIDAR

        $request->validate([
            'titulo'=>'required|',
            'descrpcion'=>'required|',
            'fecha_inicio'=>'required|date',
            'fecha_final'=>'required|date',
            'contacto_id'=>'required|numeric|unique:eventos, contacto_id'
        ]);
        $nuevoEvento = new evento();

        //Formulario
        $nuevoEvento->titulo = $request->input('titulo');
        $nuevoEvento->descrpcion = $request->input('descrpcion');
        $nuevoEvento->fecha_inicio = $request->input('fecha_inicio');
        $nuevoEvento->fecha_final = $request->input('fecha_final');
        $nuevoEvento->contacto_id= $request->input('contacto_id');
        //Fuente Externa
        $nuevoEvento->nombre = 'cumple';

        $creado = $nuevoEvento->save();

        if ($creado) {
            return redirect()->route('evento.index')
                ->with('mensaje', 'El evento fue creado exitosamente.'); //mensaje de guardado
        }else{
            // TODO Retornar con un mensaje de error.
        }

    }

    //Editar evento
    public function edit($id) {
        $Eventos = evento::findOrFail($id);
         return view('feormularioeditevento')->with('evento', $Eventos);
    }

    public function update(Request $request, $id) {

        //VALIDAR
        $request->validate([
            'titulo'=>'required|alpha',
            'descrpcion'=>'required|alpha',
            'fecha_inicion'=>'required|date',
            'fecha_fanal'=>'required|date',
            'contacto_id'=>'required|numeric|min:0|max:100',
            
        ]);

        $Eventos = evento::findOrFail($id);

        //Formulario
        $Eventos->nombre = $request->input('titulo');
        $Eventos->nombre = $request->input('descrpcion');
        $Eventos->nombre = $request->input('fecha_inicio');
        $Eventos->nombre = $request->input('fecha_final');
        $Eventos->nombre = $request->input('contadto_id');

        //Fuente Externa
        $Eventos->nombre = 'cumple';

        $creado = $Eventos->save();

        if ($creado) {
            return redirect()->route('evento.index')
                ->with('mensaje', 'El evento fue modificado exitosamente.'); //mensaje de modificacion
        }else{
            // TODO Retornar con un mensaje de error.
        }

    }

    //ELIMINAR
    public function destroy($id) {
        

        evento::destroy($id);

        //Redirigir

        return redirect('eventos/')->with('mensaje', 'evento eliminado exitosamente');
    }
}
   
