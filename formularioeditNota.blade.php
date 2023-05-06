@extends('madre')

@section('Proyecto', 'Formulario')

@section('contenido')

    <h1>Nota</h1>

    <form method="post" action="{{route('nota.actualizar', ['id'=>$nota-> id])}}">
        @method('put')
        @csrf
        <div class="form-group">
            <label for="texto_nota">texto_nota</label>
            <input type="text" class="form-control" name="texto_nota" id="texto_nota"
                   placeholder="texto_nota" value="{{$nota->texto_nota}}">
        </div>

        <div class="form-group">
            <label for="fecha_y_hora">fecha_y_hora</label>
            <input type="date" class="form-control" name="fecha_y_hora" id="fecha_y_hora"
                   placeholder="fecha_y_hora" value="{{$nota->fecha_y_hora}}">
        </div>

        <div class="form-group">
            <label for="contacto_id">contacto_id</label>
            <input type="number" class="form-control" name="contacto_id" id="contacto_id"
                   placeholder="contacto_id" value="{{$nota->contacto_id}}">
        </div>


        <button type="submit" class="btn btn-primary">Guardar</button>
        <input type="reset" class="btn btn-danger">

    </form>


@endsection