{!! Form::open(['action' => ['CardservicioController@update', $serviciosadd->id], 'method' => 'PATCH', 'files' => 'true']) !!}
{{ Form::token() }}
<div class="modal fade" id="modalservicioedit-{{$serviciosadd->id}}"  tabindex="-1" role="dialog" aria-labelledby="exampleModalslider"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalservicioedit"><strong>Servicios</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">NOMBRE :</label>
                        <input type="text" name="name" class="form-control" id="recipient-name" value="{{$serviciosadd->name}}" required>
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
                            @if($serviciosadd->image != "")
                            <img src="{{asset('/img/servicios/'.$serviciosadd->image)}}" alt="{{$serviciosadd->name}}" height="300px" width="50px" class="card-img-top">
                            @endif
                    </div>  
                    <div class="form-group cold-md-6"> 
                        <label>Imagen sobre imagen</label>
                        <br>
                            {{Form::file('imghover')}}
                            @if($serviciosadd->imghover != "")
                            <img src="{{asset('/img/servicios/'.$serviciosadd->imghover)}}" alt="{{$serviciosadd->name}}" height="300px" width="50px" class="card-img-top">
                            @endif
                    </div>  
                    <div class="form-group">
                        <div class="card-header">
                            <label for="status">Status:</label>
                            <input type="checkbox" name="status" {{ $serviciosadd->status == 1 ? "checked='checked'" : ''}}> 
                        </div>
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
