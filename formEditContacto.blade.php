@extends('madre')

@section('Proyecto', 'Formulario')

@section('contenido')

    <h1>Contacto</h1>

    <form method="post" action="{{route('contacto.actualizar', ['id'=>$contacto->id])}}">
        @method('put')
        @csrf
        <div class="form-group">
            <label for="nombre">nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre"
                   placeholder="Nombre del contacto" value="{{$contacto->nombre}}">
        </div>

        <div class="form-group">
            <label for="apellido">apellido</label>
            <input type="text" class="form-control" name="apellido" id="apellido"
                   placeholder="Apellido del contacto" value="{{$contacto->apellido}}">
        </div>

        <div class="form-group">
            <label for="Correo">correo</label>
            <input type="text" class="form-control" name="Correo" id="Correo"
                   placeholder=" igresa el correo" value="{{$contacto->Correo}}">
        </div>

        <div class="form-group">
            <label for="Telefono">telefono</label>
            <input type="number" class="form-control" name="Telefono" id="Telefono"
                   placeholder="########" value="{{$contacto->Telefono}}">
        </div>


        <button type="submit" class="btn btn-primary">Guardar</button>
        <input type="reset" class="btn btn-danger">

    </form>


@endsection
