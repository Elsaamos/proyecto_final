@extends('madre')

@section('Proyecto', 'Formulario de eventos')

@section('contenido')

    <h1>EVENTOS</h1>

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
            <label for="titulo">titulo</label>
            <input type="text" class="form-control" name="titulo" id="titulo"
                   placeholder="ingrese el titulo">
        </div>

        <div class="form-group">
            <label for="descrpcion">descrpcion</label>
            <input type="text" class="form-control" name="descrpcion" id="descrpcion"
                   placeholder="descrpcion">
        </div>

        <div class="form-group">
            <label for="fecha_inici0">fecha_inicio</label>
            <input type="date" class="form-control" name="fecha_inicio" id="fecha_inicio"
                   placeholder="fecha_inicio">
        </div>

        <div class="form-group">
            <label for="fecha_final">fecha_final</label>
            <input type="date" class="form-control" name="fecha_final" id="fecha_final"
                   placeholder=" fecha_final">
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