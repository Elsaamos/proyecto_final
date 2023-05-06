@Extiends('madre')
@section('Proyecto','Evento')
@section('contenido')

<h1>Detalle de {{$evento->titulo}} 
    <a class="btn btn-warning" href="{{route('evento.editar',['id'=>$evento->id])}}">Editar</a>
</h1>

<table class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">campos</th>
            <th scope="col">Valores</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">titulo</th>
                <td>{{ $evento->titulo }} </td>
            </tr>
            <tr>
                <th scope="row">fecha_inicial</th>
                <td>  {{ $evento->fecha_inicial }}</td>
            </tr>
            <tr>
                <th scope="row">fecha_final</th>
                <td>{{ $evento->fecha_final}}</td>
            </tr>
            <tr>
                <th scope="row">Fecha de nacimiento</th>
                <td>{{ $evento->fecha_de_nacimiento }}</td>
            </tr>
            <tr>
                <th scope="row">contacto_id</th>
                <td>{{ $evento->contacto_id }}</td>
            </tr>
            <tr>
             

            </tbody>
    </table>

    <a class="btn btn-primary" href="{{route('evento.index')}}">Volver</a>

@endsection
