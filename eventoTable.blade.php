@extends('madre')

@section('Proyecto', 'Lista de Eventos')

@section('contenido')


    @if(session('mensaje'))
        <div class="alert alert-success">
          {{ session('mensaje') }}
        </div>
    @endif

    <br>
    <br>
    



    <table class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">id</th>
            <th scope="col">titulo</th>
            <th scope="col">fecha-inicial</th>
            <th scope="col">fecha_final</th>
            <th scope="col">contacto_id</th>
            <th scope="col">Ver</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>


        </tr>
        </thead>
        <tbody>

        @forelse($eventos as $Evento)
            <tr>
                <th scope="row">{{ $Evento->id }}</th>
                <td>{{ $Evento->titulo}}
                <td> {{ $Evento->fecha_inicio }}</td>
                <td>{{ $Evento->fecha_final }}</td>
                <td>{{ $Evento->contacto_id}}</td>
                <td><a class="btn btn-info" href="{{ route('evento.mostrar', ['id'=> $Evento->id])}}">Ver</a></td>
                <td><a class="btn btn-warning" href="{{ route('evento.editar', ['id'=> $Evento->id])}}">Editar</a></td>
                <td>
                    <form method="post" action="{{route('evento.borar', ['id'=>$Evento->id])}}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Eliminar" class="btn btn-danger">
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4">No hay EVENTOS</td>
            </tr>
        @endforelse
        <h1> Eventos <a class="btn btn-primary" href="{{route('evento.crear')}}">Nuevo</a></h1>
        </tbody>
    </table>

    {{ $eventos->links() }}

@endsection
    
    