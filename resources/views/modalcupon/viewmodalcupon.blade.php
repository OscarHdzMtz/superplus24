<div class="modal fade" id="modalCuponGenerado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="icon-box">
                    {{-- <i class="fa-regular fa-thumbs-up"></i> --}}
                    <i class="fa-regular fa-thumbs-up fa-4x"><br></i>
                </div>
                {{-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> --}}
            </div>
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

                <button type="button" class="btn btn-danger btn-rounded " data-dismiss="modal"><i class="fa-solid fa-xmark"></i> Cerrar</button>
                <button onclick="exportarHTMLaPNG('divId', '{{ session('cupongenerado') }}')" type="button"
                    class="btn btn-success"><i class="fa-solid fa-download"></i> Descargar</button>
            </div>
        </div>
    </div>
</div>

<style>
    .modal-content .modal-header {
        background: #008f39;
        /* border-bottom: none;   */
        display: flex;
        justify-content: center;
        /* margin: -20px -20px 0; */
        /* border-radius: 5px 5px 0 0;
  padding: 35px; */
        border-color: #008f39;
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
    text-decoration-line:none;
    text-transform: uppercase;
    font-size: 12px;
    letter-spacing: 2px;
    border-radius: 40px;
    }

    .modal-footer .btn-danger {
        background: #c4302b;        
    }

    .modal-footer .btn-success {
        background: #008f39;
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
