<div id="modalEliminarMiempresa-{{$getempresa->id}}" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header flex-column">
				<div class="icon-box">
					<i class="fas fa-trash fa-4x"></i>
				</div>						
				<h4 class="modal-title w-100">Esta seguro que desea eliminar?</h4>	
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			{{-- <div class="modal-body">
				<p>Do you really want to delete these records? This process cannot be undone.</p>
			</div> --}}
			<div class="modal-footer justify-content-center">               
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>                
                {!! Form::open(['action' => ['MiempresaController@destroy', $getempresa->id],'method' => 'delete']) !!}
                {{ Form::token() }}
				<button type="submit" class="btn btn-danger">Eliminar</button>
                {!! Form::close() !!}
			</div>
		</div>
	</div>
</div>