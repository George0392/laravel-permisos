@extends('layouts.admin')
@section('contenido')
<div class="container">
    <div class="row ">
        <div class="col-md-11">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <h3>
                        Usuarios Registrados en el Sistema
                        @can('create user')
                        <a href="{{ route('usuarios.create') }}" class="btn btn-primary btn-lg  pull-right " ><i class="fa fa-plus " ></i><span> Nuevo</span> </a>
                        @endcan
                    </h3>

                </div>
                <div class="panel-body">
                  @include('usuarios.partials.search')
              </div>
              <table class="table table-hover table-striped table-responsive" >
                <thead>
                    <tr>
                        <th class="text-center" >Nombre</th>
                        <th class="text-center" >E-Mail</th>
                        <th class="text-center" >Rol</th>
                        <th colspan="3" class="text-center"  >Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user )
                    <tr >

                        <td class="text-center" style="vertical-align: middle;" >
                            {{ $user->name }}
                        </td>
                        <td class="text-center" style="vertical-align: middle;" >
                            {{ $user->email }}
                        </td>
                        <td class="text-center" style="vertical-align: middle;" >
                            {{ $user->roles->implode('name', ', ') }}
                        </td>



                    </td>

                    <td >

                        @include('usuarios.partials.actions')


                    </td>
                </tr>

                @endforeach

                <tfoot>
                    <tr>
                        <th class="text-center" >Nombre</th>
                        <th class="text-center" >E-Mail</th>
                        <th class="text-center" >Rol</th>
                        <th colspan="3" class="text-center"  >Acciones</th>
                    </tr>
                </tfoot>


            </tbody>
        </table>
    </div>
    {{ $users->render() }}
</div>
</div>
</div>
@endsection