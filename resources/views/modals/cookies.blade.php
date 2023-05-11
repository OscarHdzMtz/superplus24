<div class="modal fade" id="modalCookie" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div
            class="modal-content mx-auto text-center d-flex align-items-center align-self-center card p-3 text-center cookies">                     
            <img src="https://i.imgur.com/Tl8ZBUe.png" width="50"><span class="mt-2">Este sitio web almacena cookies para habilitar la funcionalidad del sitio con el fin de ofrecerle una mejor
                experiencia.</span><br> <a class="d-flex align-items-center" onclick="cerrarModalCookie()">Consulte nuestro aviso de
                Privacidad<i class="fa fa-angle-right ml-2"></i></a>
                {!! Form::open(['url' => 'cupones', 'files' => 'true']) !!}
                {{ Form::token() }}
                <button {{-- onclick="preloaderCupon()" --}} type="submit" class="btn btn-success btn-rounded"><i class="fa-regular fa-circle-check"></i> Aceptar cookie</button>
                {!! Form::close() !!}
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-rounded " data-dismiss="modal"><i
                        class="fa-solid fa-xmark"></i> Cerrar</button>                
            </div>
        </div>
    </div>
</div>

<style>
    .modal-content .modal-header {
        background: #ffcc00;
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

    .modal-confirm h4 {
        text-align: center;
        font-size: 36px;
        margin: 10px 0;
    }

    .modal-header .icon-box {
        color: #fff;
        width: 98px;
        height: 98px;
        display: inline-block;
        border-radius: 50%;
        z-index: 9;
        border: 5px solid #fff;
        padding: 15px;
        text-align: center;
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
    .modal-content .btn {
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

    .modal-content .btn-success {
        background: #25D366;
    }

    /*  .modal-footer .btn:hover,
    .modal-confirm .btn:focus {
        background: #eda645;
        outline: none;
    } */

    .modal-footer .btn span {
        margin: 1px 3px 0;
        float: left;
    }
</style>
