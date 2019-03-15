@extends('layouts.private')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Webs</div>
                    <form method="post" action="{{ route('webs.actualizar') }}">
                        @csrf
                        <label>Nombre: </label>
                        <input type="text" name="nombre" value="{{ $web->nombre }}"/>
                        <input hidden type="number" name="id" value = "{{ $web->id }}" />
                        <label>Url: </label>
                        <input type="text" name="url" value="{{ $web->url }}"/>
                        <input type="submit" value="Actualizar" />
                        @isset ($errors)
                            <br>
                        @endisset
                        {!! $errors->first ('nombre', '<small>:message</small>')!!}
                        {!! $errors->first ('url', '<small>:message</small>')!!}
                    </form>

            </div>
        </div>
    </div>
</div>
@endsection
