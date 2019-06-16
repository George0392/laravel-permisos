<!-- ##############################
				ver
				################################### -->

				<td width="10px" style="vertical-align: middle;"  >
					{{-- @can('medicos.show') --}}
					<a href="{{ route('usuarios.show',$user->id) }}" class="btn btn-success " target="_blank"><i class="fa fa-eye fa-2x "></i></a>
					{{-- @endcan --}}
				</td>

<!-- ##############################
				editar
				################################### -->

				<td width="10px" style="vertical-align: middle;"  >
				@can('update user')
					<a href="{{ route('usuarios.edit', $user->id) }}"
						class="btn btn-warning "><i class="fa fa-edit fa-2x "></i></a>
						@endcan
					</td>




<!-- ##############################
				eliminar
				################################### -->

				<td width="10px" style="vertical-align: middle;" >
					@can('delete user')
					{!! Form::open(['route'=>['usuarios.destroy',$user->id],'method'=>'DELETE']) !!}

					<button class="btn btn-danger"
					onclick="
					return confirm('Esta seguro de eliminar el registro: {{ strtoupper($user->name) }} ')"
					class="btn btn-danger"><i class="fa fa-trash fa-2x "></i>
				</button>
				{!! Form::close() !!}
				@endcan
			</td>