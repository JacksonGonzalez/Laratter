@extends('layouts.app')

@section('content')
<h1 class="h3">Mensaje id: {{ $message->id }}</h1>
<img class="img-thumbnail" src="{{ $message->image }}">
<p class="card-text">
	<small class="text-muted">{{ $message->created_at }}</small><br>
	{{ $message->content }}
</p>
@endsection