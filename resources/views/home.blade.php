@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bienvenido</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2>Hola {{ Auth::user()->name }}</h2>
                     <img src="{{ Auth::user()->avatar }}" /> 
                    <a href="/">Inicio</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
