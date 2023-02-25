<div class="modal fade" id="modalCuponGenerado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div id="divId" class="modal-content mx-auto text-center">
                <div>
                    <img src="{{ asset('/img/cupones/' . session('nombreImagenCupon')) }}" class="img-fluid">
                </div>
                <div class="mx-auto margin mt-0">
                    {!! DNS1D::getBarcodeHTML(session('cupongenerado'), 'C128', 2.5, 100, 'black', true) !!}
                    <h4 style="margin-top: -17px">{{ session('cupongenerado') }}</h4>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-rounded " data-dismiss="modal">Cerrar</button>
                <button onclick="exportarHTMLaPNG('divId', '{{ session('cupongenerado') }}')" type="button"
                    class="btn btn-success">Descargar</button>
            </div>
        </div>
    </div>
</div>
