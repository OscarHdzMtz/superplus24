<div class="container">
    <button type="button" class="btn btn-success mb-8 btn-lg btn-block" data-toggle="modal" data-target="#exampleModal">
        <i class="fa fa-plus-circle"></i> Agregar Instalaciones Plus
    </button>
</div>
    
    {!! Form::open(['url' => 'Instalacion/todas','files'=>'true']) !!}
    {{Form::token()}} 
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">NUEVO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">NOMBRE:</label>
                    <input type="text" name="nombre" class="form-control" id="recipient-name"  required>
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">IMAGEN:</label>
                    {{Form::file('image',['required' => 'required' ])}}
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
