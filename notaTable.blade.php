@extends('madre')

@section('Proyecto', 'Lista de notas')

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
            <th scope="col">texto_nota</th>
            <th scope="col">fecha_y_hora</th>
            <th scope="col">contacto_id</th>
            <th scope="col">Ver</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>


        </tr>
        </thead>
        <tbody>

        @forelse($notas as $Nota)
            <tr>
                <th scope="row">{{ $Nota->id }}</th>
                <td>{{ $Nota->texto_nota }}
                <td> {{ $Nota->fecha_y_hora }}</td>
                <td>{{ $Nota->contacto_id }}</td>
        
                <td><a class="btn btn-info" href="{{ route('nota.mostrar', ['id'=> $Nota->id])}}">Ver</a></td>
                <td><a class="btn btn-warning" href="{{ route('nota.editar', ['id'=> $Nota->id])}}">Editar</a></td>
                <td>
                    <form method="post" action="{{route('nota.borar', ['id'=>$Nota->id])}}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Eliminar" class="btn btn-danger">
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4">No hay nota</td>
            </tr>
        @endforelse
        <h1> Notas <a class="btn btn-primary" href="{{route('nota.crear')}}">Nuevo</a></h1>
        </tbody>
    </table>
    {{ $notas->links() }}

@endsection
  