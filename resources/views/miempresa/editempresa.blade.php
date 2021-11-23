{!! Form::open(['action' => ['MiempresaController@update', $getempresa->id], 'method' => 'PATCH', 'files' => 'true']) !!}
{{ Form::token() }}
<div class="modal fade" id="modalempresaedit-{{$getempresa->id}}"  tabindex="-1" role="dialog" aria-labelledby="exampleModalslider"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalempresedit"><strong>Servicios</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">NOMBRE :</label>
                        <input type="text" name="titulo" class="form-control" id="recipient-name" value="{{$getempresa->titulo}}" required>
                    </div>
                    <div class="form-outline">
                        <label for="recipient-name" class="col-form-label">DESCRIPCION:</label>
                        <textarea type="text" name="description" class="form-control" id="recipient-name"
                            onkeyup="countChars(this);" maxlength="300" {{-- required --}} >{{$getempresa->description}}</textarea>
                        Maximo de caracteres 300 caracteres<p id="charNum" class="text-success">0 caracteres</p>
                    </div>
                    <div class="form-group cold-md-6"> 
                        <label>Imagen</label>
                        <br>
                            {{Form::file('image')}}
                            @if($getempresa->image != "")
                            <img src="{{asset('/img/miempresa/'.$getempresa->image)}}" alt="{{$getempresa->name}}" height="300px" width="50px" class="card-img-top">
                            @endif
                    </div>   
                    <div class="form-group cold-md-6"> 
                        <label>Imagen Hover</label>
                        <br>
                            {{Form::file('imghover')}}
                            {{-- @if($getempresa->image != "") --}}
                            <img src="{{asset('/img/miempresa/'.$getempresa->imghover)}}" alt="{{$getempresa->name}}" height="300px" width="50px" class="card-img-top">
                            {{-- @endif --}}
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
