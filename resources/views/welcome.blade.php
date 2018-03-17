@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
    <h1>Laratter</h1>
    <nav>
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a href="/" class="nav-link">Inicio</a>
            </li>
            <li class="nav-item">
                <a href="/acerca" class="nav-link">Acerca</a>
            </li>
        </ul>
    </nav>
</div>
<div class="row">
    <form action="/messages/create" method="post">
        <div class="form-group @if($errors->has('message')) has->danger @endif">
            {{ csrf_field() }} <!-- certifica que ese form viene de laravel-->  
            <input type="text" name="message" class="form-control" placeholder="Que Piensas Hacer?">
            @if($errors->any())
                @foreach($errors->all() as $error)
                <div class="">{{ $error }}</div>
                @endforeach
            @endif

        </div>
    </form>
</div>
<div class="row">
    @forelse($messages as $message)
        <div class="col-6">
            <img class="img-thumbnail" src="{{ $message->image }}">
            <p class="card-text">
                {{ $message->content }}
                <a href="/messages/{{ $message->id }}">Leer Más</a>
            </p>
        </div>
    @empty
        <p>No tiene Datos para mostrar</p>
    @endforelse
</div>
@endsection