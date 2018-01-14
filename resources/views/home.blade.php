@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{ URL('users') }}" class="btn btn-sm btn-primary">Registro de usuario nuevo</a>
                    <h4>Código fuente: <a target="_blank" href="https://github.com/andres187/registrousuario">https://github.com/andres187/registrousuario</a></h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
