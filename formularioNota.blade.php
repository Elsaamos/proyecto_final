@extends('madre')

@section('Proyecto', 'Formulario de nota')

@section('contenido')

    <h1> NOTA</h1>

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
            <label for="texto_nota">texto_nota</label>
            <input type="text" class="form-control" name="texto_nota" id="texto_nota"
                   placeholder="texto_nota">
        </div>

        <div class="form-group">
            <label for="fecha_y_nota">fecha_y_nota</label>
            <input type="date" class="form-control" name="fecha_y_nota" id="fecha_y_nota"
                   placeholder="fecha_y_nota">
        </div>

        <div class="form-group">
            <label for="contacto_id">contacto_id</label>
            <input type="number" class="form-control" name="contacto_id" id="contacto_id"
                   placeholder="########">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
        <input type="reset" class="btn btn-danger">

    </form>


@endsection