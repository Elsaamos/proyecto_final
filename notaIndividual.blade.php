@Extiends('madre')
@section('Proyecto','nota')
@section('contenido')

<h1>Detalle de {{$nota->texto_nota}} 
    <a class="btn btn-warning" href="{{route('nota.editar',['id'=>$nota->id])}}">Editar</a>
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
                <th scope="row">texto_nota</th>
                <td>{{ $nota->texto_nota }} </td>
            </tr>
            <tr>
                <th scope="row">fecha_y_hora</th>
                <td>  {{ $nota->fecha_y_hora }}</td>
            </tr>
            <tr>
                <th scope="row">nombre</th>
                <td>{{ $nota->nombre }}</td>
            </tr>
            <tr>
                <th scope="row">contacto_id</th>
                <td>{{ $nota->contacto_id }}</td>
            </tr>
            <tr>
             

            </tbody>
    </table>

    <a class="btn btn-primary" href="{{route('nota.index')}}">Volver</a>

@endsection
