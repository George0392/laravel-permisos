@extends('layouts.admin')
@section('contenido')
<div class="container">

    @include('usuarios.partials.error')

    <div class="row">
        <div class="col-md-11">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>
                    Ingresar nuevo Medico:
                    <a href="{{ route('usuarios.index') }}" class="btn btn-success pull-right  btn-lg " ><i class="fa fa-arrow-left  " ></i><span> Volver</span> </a>
                    </h3>
                </div>
                <div class="panel-body">
                   {{ Form::open(['route' => 'usuarios.store', 'files' => true]) }}
                    @include('usuarios.partials.form')
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
