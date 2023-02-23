{!! Form::open(['action' => ['GenerarCuponesClientesController@update', $cupon->id], 'method' => 'PATCH', 'files' => 'true']) !!}
{{ Form::token() }}
<div class="modal fade" id="modalcoponview-{{$cupon->id}}"  tabindex="-1" role="dialog" aria-labelledby="exampleModalslider"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalcoponview"><strong>Servicios</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">NOMBRE :</label>
                        <input type="text" name="name" class="form-control" id="recipient-name" value="{{$cupon->titulo}}" required>
                    </div>
                    {{-- <div class="form-outline">
                        <label for="recipient-name" class="col-form-label">DESCRIPCION:</label>
                        <textarea type="text" name="description" class="form-control" id="recipient-name"
                            onkeyup="countChars(this);" maxlength="300" required >{{$serviciosadd->description}}</textarea>
                        Maximo de caracteres 300 caracteres<p id="charNum" class="text-success">0 caracteres</p>
                    </div> --}}
                    <div class="form-group cold-md-6"> 
                        <label>Imagen</label>
                        <br>
                            {{Form::file('image')}}
                            @if($cupon->image != "")
                            <img src="{{asset('/img/servicios/'.$cupon->image)}}" alt="{{$cupon->name}}" height="300px" width="50px" class="card-img-top">
                            @endif
                    </div>                                               
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">CERRAR</button>
                <button type="submit" class="btn btn-primary">GUARDAR</button>
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}