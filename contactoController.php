<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\contacto;



class contactoController extends Controller
{
    public function index(){
        $Contactos = contacto::paginate(10);
        return view('ContactoTable')->with('contactos', $Contactos);
    }

    public function show($id){
        $Contacto = contacto::findOrfail($id);
        return view('ContactoIndividual')->with('contacto', $Contacto);
    }

    public function create (){
        return view('formularioContacto');
    }

    public function store (Request $request) {

        //VALIDAR

        $request->validate([
            'nombre'=>'required|alpha',
            'apellido'=>'required|alpha',
            'correo'=>'required|unique:contactos,correo',
            'telefono'=>'required|numeric|unique:contacto,telefono'
        ]);
        $nuevoContacto = new contacto();

        //Formulario
        $nuevoContacto->nombre = $request->input('nombre');
        $nuevoContacto->apellido = $request->input('apellido');
        $nuevoContacto->correo = $request->input('correo');
        $nuevoContacto->telefono = $request->input('telefono');

        //Fuente Externa
        $nuevoContacto->fecha_de_nacimiento = '20000513';

        $creado = $nuevoContacto->save();

        if ($creado) {
            return redirect()->route('Contacto.index')
                ->with('mensaje', 'El contacto fue creado exitosamente.'); //mensaje de guardado
        }else{
            // TODO Retornar con un mensaje de error.
        }

    }

    //Editar contacto
    public function edit($id) {
        $Contacto = contacto::findOrFail($id);
         return view('formEditContacto')->with('contacto', $Contacto);
    }

    public function update(Request $request, $id) {

        //VALIDAR
        $request->validate([
            'nombre'=>'required|alpha',
            'apellido'=>'required|alpha',
            'correo'=>'required|numeric|min:0|max:100',
            'telefono'=>'required|numeric',
            
        ]);

        $Contacto = contacto::findOrFail($id);

        //Formulario
        $Contacto->nombre = $request->input('nombre');
        $Contacto->nombre = $request->input('apellido');
        $Contacto->nombre = $request->input('correo');
        $Contacto->nombre = $request->input('telefono');
       

        //Fuente Externa
        $Contacto->fecha_de_nacimiento = '20000512';

        $creado = $Contacto->save();

        if ($creado) {
            return redirect()->route('Contacto.index')
                ->with('mensaje', 'El contacto fue modificado exitosamente.'); //mensaje de modificacion
        }else{
            // TODO Retornar con un mensaje de error.
        }

    }

    //ELIMINAR
    public function destroy($id) {
        

        contacto::destroy($id);

        //Redirigir

        return redirect('contactos/')->with('mensaje', 'Contacto eliminado exitosamente');
    }
}
   
