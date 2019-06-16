<div class="form-group col-md-10 ">
	{{ Form::label ('name','Nombre de Usuario:') }}
	{{ Form::text ('name',null, ['placeholder'=>'nombre de Usuario','class'=>'form-control']) }}
</div>

<div class="form-group col-md-10 ">
	{{ Form::label ('email','Email del Usuario:') }}
	{{ Form::email ('email',null, ['placeholder'=>'E-mail de Usuario','class'=>'form-control']) }}
</div>


<div class="form-group col-md-10 ">
	{{ Form::label ('password','Contraseña del Usuario:') }}
	<br>
	{{ Form::password ('password', ['placeholder'=>'Contraseña de Usuario','class'=>'form-control']) }}
</div>

<div class="form-group col-md-6 " >

        	{{ Form::label ('roles','Rol de Usuario:') }}
            {!! Form::select('roles', $roles , null, ['data-live-search'=>'true' ,'class'=>'form-control selectpicker '] ) !!}

        </div>

<div class="form-group col-md-12 ">
	{{-- {{ Form::submit('Guardar', ['class'=>'btn btn-primary']) }} --}}
	{{ Form::button('<i class="fa fa-save "></i><span> Guardar</span>', ['type' => 'submit', 'class' => 'btn btn-primary btn-lg'] )  }}
</div>