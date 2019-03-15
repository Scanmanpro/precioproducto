@extends('layouts.private')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Categorias</div>
                    <form method="post" action="{{ url('categorias') }}">
                        @csrf
                        <label>Nombre: </label>
                        <input type="text" name="nombre" value="{{ old ('nombre') }}"/>
                        <input type="submit" value="Agregar" />
                        @isset ($errors)
                            <br>
                        @endisset
                        {!! $errors->first ('nombre', '<small><b>:message</b></small>')!!}
                   </form>
                <ul>
                                @forelse ($lista_cats as $categoria)
                                    <li>{{$categoria->nombre}} <a href="{{ route ('categorias.editar',$categoria->id) }}">Editar</a> <a href="{{ route ('categorias.eliminar',$categoria->id) }}">Eliminar</a></li>
                                @empty
                                    <p style="color:red">No existe ninguna categoria</p>
                                @endforelse  
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
