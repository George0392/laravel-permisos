@extends('layouts.admin')
@section('contenido')

<div class="container">

 <div class="col-md-11 panel-heading ">
    <h3>
        Ficha Técnica del Medico:
        <br>
        <a href="{{ route('medicos.index') }}" class="btn btn-success pull-right  btn-lg " ><i class="fa fa-arrow-left  " ></i><span> Volver</span> </a>


    </h3>
<br>
    <h2 class="text-center">
        {{ $doctor->nombre }}
    </h2>
<a href="{{ route('medicos.pdf', $doctor->id) }}" class="btn btn-info pull-right  btn-lg " ><i class="fa fa-print  " ></i><span> Imprimir</span> </a>

</div>

<div class="row">
    <div class="col-md-11">
        <div class="panel panel-default">

            <div class="panel-heading">

                <div class="row">



{{--##############################################
foto
############################################## --}}

                    <div class="col-md-6">
                         <img class="pull-right" height="200px" width="200px" src="{{ $doctor->foto }}">
                    </div>

{{--##############################################
fin foto
############################################## --}}

                </div> <!-- row -->
                <br>

       </div> <!-- panel heading -->
       <div class="panel-body">
          <h3 class="panel-title">Ficha Tecnica</h3>

          <table class="table table-condensed table-bordered">
            <thead class="bg-success">
              <tr>
                <th class="text-center">Nombre</th>
                <th class="text-center">Cedula</th>
                <th class="text-center">Codigo Medico</th>
                <th class="text-center">Especialidad</th>
                <th class="text-center">Cargo</th>

            </tr>
        </thead>

        <tbody>
          <tr>
            <td class="text-center">{{$doctor->nombre }}</td>
            <td class="text-center">{{$doctor->cedula }}</td>
            <td class="text-center">{{$doctor->codigo_medico }}</td>
            <td class="text-center">{{$doctor->especialidad}}</td>
            <td class="text-center">{{$doctor->cargo }}</td>


        </tr>

    </tbody>

</table>

<hr>

<table class="table table-condensed table-bordered">
            <thead class="bg-success">
              <tr>
                <th class="text-center ">Telefono</th>
                <th class="text-center">Observaciones</th>

            </tr>
        </thead>

        <tbody>
          <tr>
            <td class="text-center">{{$doctor->telefono }}</td>
            <td class="text-justify">{{$doctor->observaciones }}</td>



        </tr>

    </tbody>
</table>


</div> <!-- panel body -->

</div> <!-- panel -->
</div> <!-- col -->
</div> <!-- row -->

</div>    <!-- container -->

@endsection

