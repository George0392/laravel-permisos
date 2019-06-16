
<div class="col-md-10">

{{ Form::open(['route' => ['usuarios.index'],'method'=>'GET','autocomplete'=>'off', 'role'=>'search']) }}
  <div class="form-group">
	<div class="input-group">
		<input type="text" class="form-control " name="searchtext" placeholder="Buscar por Usuario o Email...">
		<span class="input-group-btn ">
			<button type="submit" class="btn btn-primary" > Buscar </button>
		</span>
	</div>
</div>
{{ Form::close() }}
</div>