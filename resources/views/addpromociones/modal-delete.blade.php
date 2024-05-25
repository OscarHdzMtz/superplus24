<div id="modalEliminar-{{$oferta->id}}" class="modal fade">
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
                {!! Form::open(['action' => ['PublicofertController@destroy', $oferta->id],'method' => 'delete']) !!}
                {{ Form::token() }}
				<button type="submit" class="btn btn-danger">Eliminar</button>
                {!! Form::close() !!}
			</div>
		</div>
	</div>
</div>  


{{-- MODAL ANTES --}}
{{-- <div class="modal fade" id="modalEliminar-{{$oferta->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hola {{ Auth::user()->name }} </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                Estas seguro que quieres eliminar esta Promocion
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    {!! Form::open(['action' => ['PublicofertController@destroy', $oferta->id],'method' => 'delete']) !!}
                    {{ Form::token() }}
                <button type="submit" class="btn btn-primary">Eliminar</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div> --}}

