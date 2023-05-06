@extends('madre')

@section('Proyecto', 'Formulario')

@section('contenido')

    <h1>Contacto</h1>

    <form method="post" action="{{route('evento.actualizar', ['id'=>$evento->id])}}">
        @method('put')
        @csrf
        <div class="form-group">
            <label for="titulo">titulo</label>
            <input type="text" class="form-control" name="titulo" id="titulo"
                   placeholder="Nombre del evento" value="{{$evento->titulo}}">
        </div>

        <div class="form-group">
            <label for="descrpcion">descrpcion</label>
            <input type="text" class="form-control" name="descrpcion" id="descrpcion"
                   placeholder="descripcion del evento" value="{{$evento->descrpcion}}">
        </div>

        <div class="form-group">
            <label for="fecha_inicio">fecha_inicio</label>
            <input type="date" class="form-control" name="fecha_inicio" id="fecha_inicio"
                   placeholder=" fecha de inicio de evento" value="{{$evento->fecha_inicio}}">
        </div>

        <div class="form-group">
            <label for="fecha_final">fecha_final</label>
            <input type="date" class="form-control" name="fecha_final" id="fecha_final"
                   placeholder="fecha final" value="{{$evento->fecha_final}}">
        </div>
        <div class="form-group">
            <label for="contacto_id">contacto_id</label>
            <input type="number" class="form-control" name="contacto_id" id="contacto_id"
                   placeholder="contacto_id" value="{{$evento->contacto_id}}">
        </div>


        <button type="submit" class="btn btn-primary">Guardar</button>
        <input type="reset" class="btn btn-danger">

    </form>


@endsection
