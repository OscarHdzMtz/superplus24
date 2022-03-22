{!! Form::open(['action' => ['MiempresaController@update', $getempresa->id], 'method' => 'PATCH', 'files' => 'true']) !!}
{{ Form::token() }}
<div class="modal fade" id="modalempresaedit-{{$getempresa->id}}"  tabindex="-1" role="dialog" aria-labelledby="exampleModalslider"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalempresedit"><strong>Mi empresa</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Orden :</label>
                        <input type="text" name="orden" class="form-control" id="recipient-name" value="{{$getempresa->orden}}" required>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">TITULO :</label>
                        <input type="text" name="titulo" class="form-control" id="recipient-name" value="{{$getempresa->titulo}}">
                    </div>
                    <div class="form-outline">
                        <label for="recipient-name" class="col-form-label">DESCRIPCION:</label>
                        <textarea size="400" type="text" name="description" class="form-control text-justify" id="recipient-name" rows="5">{{ $getempresa->description }}</textarea>                        
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
                        <label>Imagen sobre imagen</label>
                        <br>
                            {{Form::file('imghover')}}
                            {{-- esto valida que ya exista la imagen y manda una excepcion --}}
                            {{-- @if($getempresa->image != "") --}}                                                        
                            {{-- @endif --}}
                            @if ($getempresa->imghover <> "")
                            <img src="{{asset('/img/miempresa/'.$getempresa->imghover)}}" alt="{{$getempresa->name}}" height="300px" width="50px" class="card-img-top">    
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
