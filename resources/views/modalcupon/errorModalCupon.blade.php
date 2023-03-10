{{-- <style>
    body {
		font-family: 'Varela Round', sans-serif;
	}
	.modal-confirm {		
		color: #636363;
		width: 400px;
		margin: 30px auto;
	}
	.modal-confirm .modal-content {
		padding: 20px;
		border-radius: 5px;
		border: none;
        text-align: center;
		font-size: 14px;
	}
	.modal-confirm .modal-header {
		border-bottom: none;   
        position: relative;
	}
	.modal-confirm h4 {
		text-align: center;
		font-size: 26px;
		margin: 30px 0 -10px;
	}
	.modal-confirm .close {
        position: absolute;
		top: -5px;
		right: -2px;
	}
	.modal-confirm .modal-body {
		color: #999;
	}
	.modal-confirm .modal-footer {
		border: none;
		text-align: center;		
		border-radius: 5px;
		font-size: 13px;
		padding: 10px 15px 25px;
	}
	.modal-confirm .modal-footer a {
		color: #999;
	}		
	.modal-confirm .icon-box {
		width: 80px;
		height: 80px;
		margin: 0 auto;
		border-radius: 50%;
		z-index: 9;
		text-align: center;
		border: 3px solid #f15e5e;
	}
	.modal-confirm .icon-box i {
		color: #f15e5e;
		font-size: 46px;
		display: inline-block;
		margin-top: 13px;
	}
    .modal-confirm .btn {
        color: #fff;
        border-radius: 4px;
		background: #60c7c1;
		text-decoration: none;
		transition: all 0.4s;
        line-height: normal;
		min-width: 120px;
        border: none;
		min-height: 40px;
		border-radius: 3px;
		margin: 0 5px;
		outline: none !important;
    }
	.modal-confirm .btn-info {
        background: #c1c1c1;
    }
    .modal-confirm .btn-info:hover, .modal-confirm .btn-info:focus {
        background: #a8a8a8;
    }
    .modal-confirm .btn-danger {
        background: #f15e5e;
    }
    .modal-confirm .btn-danger:hover, .modal-confirm .btn-danger:focus {
        background: #ee3535;
    }
	.trigger-btn {
		display: inline-block;
		margin: 100px auto;
	}
</style>
<div id="errorModalCupon" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header">
				<div class="icon-box">					
					<i class="fas fa-times fa-4x"><br></i>
				</div>								
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<h4><strong>{{session('nombreCupon')}}</strong></h4>
				<p>{{session('info')}}</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
				<button type="button" class="btn btn-danger">Delete</button>
			</div>
		</div>
	</div>
</div>      --}}

<style>
    body {
        font-family: 'Varela Round', sans-serif;
    }

    .modal-confirm .modal-content .modal-body {
        color: black
    }

    .modal-content .modal-header {
        background: #ff0000;
        border-bottom: none;
        position: relative;
        text-align: center;
        margin: -20px -20px 0;
        border-radius: 5px 5px 0 0;
        /* padding: 35px; */
    }

    .modal-content .modal-footer {
        display: flex;
        justify-content: center;
    }

    .modal-content h4 {
        text-align: center;
        font-size: 36px;
        margin: 10px 0;
    }

    .modal-content P {
        text-align: center;
        font-size: 16px;
        margin: 10px 0;
    }

    .modal-content .form-control,
    .modal-content .btn {
        min-height: 40px;
        border-radius: 3px;
    }

    .modal-content .close {
        position: absolute;
        top: 15px;
        right: 15px;
        color: #fff;
        text-shadow: none;
        opacity: 0.5;
    }

    .modal-contentm .close:hover {
        opacity: 0.8;
    }

    .modal-content .divIzquierdo {
        display: inline-block;
        width: 50%;
        height: 50%;
        float: left;
        text-align: center;
        /* border: #000000 1px solid; */
        margin: -16px -16px -16px;
        padding:
            /* 50px */
            0px;
    }

    .modal-content .divDerecho {
        display: inline-block;
        width: 55%;
        height: 100%;
        margin: -15px;
        margin-top: 3px;
        text-align: center;
        /* border: #000000 1px solid; */
    }

    .modal-content .divDerecho p {
        color: white;
    }

    .modal-content .icon-box {
        color: #fff;
        width: 65px;
        height: 65px;
        display: inline-block;
        border-radius: 50%;
        z-index: 9;
        border: 3px solid #fff;
        /* padding: 8px 2px -2px -4px; */
        text-align: center;
    }

    .modal-confirm .icon-box i {
        color: #fff;
    }

    .modal-content .icon-box i {
        font-size: 58px;
        margin: 0px -2px 0 -2px;
    }

    .modal-content .modal-dialog {
        margin-top: 80px;
    }

    .modal-content .btn {
        color: #fff;
        border-radius: 4px;
        background: #003baa;
        text-decoration: none;
        transition: all 0.4s;
        line-height: normal;
        border-radius: 30px;
        margin-top: 10px;
        padding: 6px 20px;
        min-width: 150px;
        border: none;
    }

    .modal-content.btn:hover,
    .modal-confirm .btn:focus {
        background: #eda645;
        outline: none;
    }

    .trigger-btn {
        display: inline-block;
        margin: 100px auto;
    }
</style>

<!-- Modal HTML -->
{{-- <div id="errorModalCupon" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<div class="icon-box">
					<i class="fas fa-times fa-4x"><br></i>
				</div>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body text-center">
				<h4><strong>{{session('nombreCupon')}}</strong></h4>	
				<p>{{session('info')}}</p>
				<button class="btn btn-success" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
	</div>
</div> --}}

<div class="modal fade" id="errorModalCupon" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <<div class="modal-dialog modal-confirm">
        <div class="modal-content">
            <div class="modal-header">
                <div class="divIzquierdo">
                    {{-- <i class="fas fa-times fa-4x"><br></i> --}}
                    <img src="{{ asset('/img/cupones/' . session('imagenCupon')) }}" class="img-fluid">
                </div>
                <div class="divDerecho">
                    <div class="icon-box">
                        <i class="fas fa-times"><br></i>
                    </div>
                    <p><strong>¡CUPÓN GENERADO!</strong></p>
                    <small style="color: white" class="agree-text">{{ session('info') }} <br>
                        {{ session('diaSiguente') }}</small>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body text-center">
                {{-- <h4><strong>{{ session('nombreCupon') }}</strong></h4> --}}

                {{-- <p><strong>¡CUPÓN GENERADO!</strong></p>
                <p>{{ session('info') }} {{ session('diaSiguente') }}</p> --}}
                @if (session('idCuponAleatorio'))
                    {{-- <h4>{{ session('idCuponAleatorio') }}</h4> --}}
                    <h5><strong>CUPÓN DISPONIBLE</strong></h5>
                    <img style="margin-top: -20px" src="{{ asset('/img/estaticos/flecha-abajo.gif') }}" width="80px"
                        class="img-fluid">
                    <div style="margin-top: -12px">
                        <img src="{{ asset('/img/cupones/' . session('imagenCuponAleatorio')) }}" class="img-fluid">
                    </div>
                    <div {{-- style="border: #000000 1px solid;"  --}}class="row">
                        <div style="cursor: pointer; display: flex; align-items: center; align-content: center; justify-content: center"
                            class="col-6">
                            <a style="border: #f15e5e 1.5px solid"
                                class="btn_filtro_promo btn-danger btn-block text-center" data-dismiss="modal">
                                <i class="fa-solid fa-xmark mr-1"></i><strong>Cerrar</strong>
                            </a>
                        </div>
                        <div {{-- style="border: green 1px solid;" --}} class="col-6">
                            {!! Form::open([
                                'action' => ['GenerarCuponesClientesController@update', session('idCuponAleatorio')],
                                'method' => 'PATCH',
                                'files' => 'true',
                                'style' => 'margin-left: -20px',
                            ]) !!}
                            {{ Form::token() }}
                            <button
                                style="border: green 1px solid; display: flex; align-items: center;margin-left: -18px;"
                                onclick="preloaderCupon()" type="submit"
                                class="btn_filtro_promo btn-success text-center"> <i class="fas fa-sync-alt mr-1"></i>
                                <strong> Generar</strong>
                            </button>
                            {!! Form::close() !!}
                        </div>
                    </div>
                @else
                    <div>
                        <h4>Visite nuestras promociones</h4>
                        <img src="{{ asset('/img/estaticos/logopalomita.png') }}" width="50%"
                            class="img-fluid">
                        <div>
                            <a style="cursor: pointer;" class="btn_filtro_promo btn-danger text-center mt-3"
                                data-dismiss="modal">
                                <i class="fa-solid fa-xmark"></i><strong> Cerrar</strong>
                            </a>
                            <a class="btn_filtro_promo btn-success text-center mt-3" href="{{ url('promociones') }}">
                                <i class="fas fa-percentage"></i><strong> Promociones</strong>
                            </a>

                        </div>
                    </div>
                @endif
            </div>
        </div>
</div>
</div>
