@Extiends('madre')
@section('Proyecto','Contacto')
@section('contenido')
<body>
<h1>Detalle de {{$contacto->nombre}} {{$contacto->apellido}}
    <a class="btn btn-warning" href="{{route('contacto.editar',['id'=>$contacto->id])}}">Editar</a>
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
                <th scope="row">nombre</th>
                <td>{{ $contacto->nombre }} </td>
            </tr>
            <tr>
                <th scope="row">apellido</th>
                <td>  {{ $contacto->apellido }}</td>
            </tr>
            <tr>
                <th scope="row">correo</th>
                <td>{{ $contacto->correo }}</td>
            </tr>
            <tr>
                <th scope="row">fecha de nacimiento</th>
                <td>{{ $contacto->fecha_de_nacimiento }}</td>
            </tr>
            <tr>
                <th scope="row">telefono</th>
                <td>{{ $contacto->telefono }}</td>
            </tr>
            <tr>
             

            </tbody>
    </table>

    <a class="btn btn-primary" href="{{route('Contacto.index')}}">Volver</a>
</body>
@endsection
