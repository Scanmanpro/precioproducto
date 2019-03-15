@extends('layouts.private')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar categorias</div>
                    <form method="post" action="{{ route('categorias.actualizar') }}">
                        @csrf
                        <label>Nombre: </label>
                        <input type="text" name="nombre" value="{{ $categoria->nombre }}"/>
                        <input hidden type="number" name="id" value="{{ $categoria->id }}"/>
                        <input type="submit" value="Actualizar" />
                        {!! $errors->first ('nombre', '<small><b>:message</b></small>')!!}
                   </form>
            </div>
        </div>
    </div>
</div>
@endsection
