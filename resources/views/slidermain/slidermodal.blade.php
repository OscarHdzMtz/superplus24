<div class="container">
    <h2> Lista de Slider
        <form class="form-inline ml-3 float-right">
            <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" name="search" type="search" placeholder="Buscar" aria-label="Search">
                <div class="input-group-prepend">
                    <button class="input-group-text" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
    <button type="button" class="btn btn-success btn-lg float-right" data-toggle="modal"
        data-target="#exampleModal">
        <i class="fa fa-plus-circle"></i> Agregar Slider
    </button>    
</h2>
</div>

{!! Form::open(['url' => 'slidermain', 'files' => 'true']) !!}
{{ Form::token() }}
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalslider"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalslider"><strong>NUEVA</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">NOMBRE :</label>
                        <input type="text" name="name" class="form-control" id="recipient-name" required>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">DESCRIPCION:</label>
                        <textarea type="text" name="description" class="form-control" id="recipient-name"
                            onkeyup="countChars(this);" maxlength="300" {{-- required --}}></textarea>
                        Maximo de caracteres 300 caracteres<p id="charNum" class="text-success">0 caracteres</p>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">IMAGEN:</label>
                        {{ Form::file('image', ['required' => 'required']) }}
                    </div>
                    <div class="form-group">
                        <label>FECHA INICIO</label>
                        <input type="date" name="fechaInicio" required> <br>
                        <label>FECHA FIN </label>
                        <input type="date" name="fechaFin" required>
                    </div>                   
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">CERRAR</button>
                <button type="submit" class="btn btn-primary">GUARDAR OFERTA</button>
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}

