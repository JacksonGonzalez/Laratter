<img class="img-thumbnail" src="{{ $message->image }}">
<p class="card-text">
	<div class="text-muted">Escrito por <a href="/{{ $message->user->username }}">{{ $message->user->name }}</a></div>
	<div class="card-text">Elaborado el <strong>{{ $message->created_at }}</strong></div>
    {{ $message->content }}
    <a href="/messages/{{ $message->id }}">Leer Más</a>
</p>
