@extends('madre')

@section('Proyecto', 'Formulario de Contactos')

@section('contenido')

    <h1>Contacto</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="">
        @csrf
        <div class="form-group">
            <label for="nombre">nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre"
                   placeholder="Nombre del contacto">
        </div>

        <div class="form-group">
            <label for="apellido">apellido</label>
            <input type="text" class="form-control" name="apellido" id="apellido"
                   placeholder="Apellido del contacto">
        </div>

        <div class="form-group">
            <label for="nota">correo</label>
            <input type="text" class="form-control" name="Correo" id="Correo"
                   placeholder=" ingrese el correo">
        </div>

       

        <div class="form-group">
            <label for="Telefono">telefono</label>
            <input type="number" class="form-control" name="Telefono" id="Telefono"
                   placeholder="########">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
        <input type="reset" class="btn btn-danger">

    </form>


@endsection