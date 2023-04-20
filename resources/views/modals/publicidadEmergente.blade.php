<div class="modal fade" id="modalPublicidadEmergente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            {{-- <div class="modal-header">
                <div class="icon-box ">
                    <i class="fa-regular fa-thumbs-up fa-4x"><br></i>                    
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div> --}}
            <div class="btnCerrarModal">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">{{-- &times; --}}<i
                        class="fas fa-times-circle fa-2x"><br></i></button>
            </div>

            <div class="modal-content mx-auto text-center">
                <div>
                    <img src="{{ asset('/img/publicidadEmergente/' . $getPublicidadSeleccionado->image) }}"
                        class="img-fluid">
                </div>
                @if ($getPublicidadSeleccionado->paginaARedireccionar)
                    <div class="mb-3">
                        <a class="btn_filtro_promo btn-success text-center mt-3"
                            href="{{ /* "/" . */ $getPublicidadSeleccionado->paginaARedireccionar }}">
                            <i class="fas fa-sign-in-alt"></i>
                                {{ $getPublicidadSeleccionado->textoDelBoton }}</strong>
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

<style>
    .modal-content .modal-header {
        /* background: #ffcc00; */
        /* border-bottom: none;   */
        display: flex;
        justify-content: center;
        /* margin: -20px -20px 0; */
        /* border-radius: 5px 5px 0 0;
  padding: 35px; */
        border-color: #ffcc00;
    }

    .modal-content .modal-footer {
        display: flex;
        justify-content: center;
    }

    .modal-content .btnCerrarModal {
        position: absolute;
        right: 1px;
        top: 1px;
        z-index: 9;
    }

    .modal-content .btnCerrarModal button {
        color: red;
        background: white;
        border-radius: 50%;
    }

    .modal-confirm h4 {
        text-align: center;
        font-size: 36px;
        margin: 10px 0;
    }

    .modal-header .icon-box {
        display: inline-block;
        margin-right: -30px;
        z-index: 9;
        padding: 15px;

    }

    .modal-header .icon-box img {
        width: 98px;
        height: 98px;
    }


    .modal-header .icon-box i {
        font-size: 64px;
        margin: -4px 0 0 0;
    }

    .modal-footer .btn {
        padding: 10px 30px;
        color: #ffffff;
        font-weight: bold;
        text-decoration: none;
        text-decoration-line: none;
        text-transform: uppercase;
        font-size: 12px;
        letter-spacing: 2px;
        border-radius: 40px;
    }

    .modal-footer .btn-danger {
        background: #c4302b;
    }

    .modal-footer .btn-success {
        background: #25D366;
    }

    /*  .modal-footer .btn:hover,
    .modal-confirm .btn:focus {
        background: #eda645;
        outline: none;
    } */

    ..modal-footer .btn span {
        margin: 1px 3px 0;
        float: left;
    }
</style>
