@extends('layouts.private')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Webs</div>
                    <form method="post" action="{{ url('webs') }}">
                        @csrf
                        <label>Nombre: </label>
                        <input type="text" name="nombre" value="{{ old ('nombre') }}"/>
                        <label>Url: </label>
                        <input type="text" name="url" value="{{ old ('url') }}"/>
                        <input type="submit" value="Agregar" />
                        @isset ($errors)
                            <br>
                        @endisset
                        {!! $errors->first ('nombre', '<small>:message</small>')!!}
                        {!! $errors->first ('url', '<small>:message</small>')!!}
                    </form>
                <ul>
                    @forelse ($lista_webs as $web)
                        <li>{{$web->nombre}} : {{$web->url}} 
                            <a href="{{ route ('webs.editar',$web->id) }}">Editar</a> 
                            <a href="{{ route ('webs.eliminar',$web->id) }}">Eliminar</a>
                        </li>
                    @empty
                        <p style="color:red">No existe ninguna categoria</p>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
