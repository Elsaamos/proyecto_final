@extends('madre')

@section('Proyecto', 'Lista de Contactos')

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
            <th scope="col">nombre</th>
            <th scope="col">apellido</th>
            <th scope="col">correo</th>
            <th scope="col">telefono</th>
            <th scope="col">Ver</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>


        </tr>
        </thead>
        <tbody>

        @forelse($contactos as $Contacto)
            <tr>
                <th scope="row">{{ $Contacto->id }}</th>
                <td>{{ $Contacto->nombre }}
                <td> {{ $Contacto->apellido }}</td>
                <td>{{ $Contacto->correo }}</td>
                <td>{{ $Contacto->telefono}}</td>
                <td><a class="btn btn-info" href="{{ route('contacto.mostrar', ['id'=> $Contacto->id])}}">Ver</a></td>
                <td><a class="btn btn-warning" href="{{ route('contacto.editar', ['id'=> $Contacto->id])}}">Editar</a></td>
                <td>
                    <form method="post" action="{{route('contacto.borar', ['id'=>$Contacto->id])}}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Eliminar" class="btn btn-danger">
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4">No hay contacto</td>
            </tr>
        @endforelse
        <h1>Contactos <a class="btn btn-primary" href="{{route('contacto.crear')}}">Nuevo</a></h1>
    
    </table>
    </tbody>

  
    {{ $contactos->links() }} 

@endsection
    
    
           
