@extends('layouts.app')

@section('content')
	<div class="row">
		@foreach($user->follows as $follow)
			<div class="col-12">
				<li class=""><a href="/{{ $user->username }}">{{ $follow->username }}</a></li>
			</div>
		@endforeach
	</div>
@endsection