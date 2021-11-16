<div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="registration-form">
                <form>
                    <div class="form-icon">
                        <span><img src="{{ asset('img/logop.png') }}" alt=""></i></span>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control item" id="username" placeholder="Nombre completo">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control item" id="email" placeholder="Correo">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control item" id="phone-number" placeholder="Numero telefonico">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control item" id="lugar" placeholder="Lugar de Residencia">
                    </div>                                        
                    <div class="form-group">
                        <a class="text-center"><strong>Adjunte su Solicitud de empleo o CV</strong></a>
                        <input type="file" name="archivosubido">
                    </div>
                    <div class=" d-flex flex-column text-center px-5 mt-3 mb-3"> <small class="agree-text">He leído y acepto el aviso de privacidad.</small> <a href="#" class="terms" target="blank">Aviso de privacidad</a> </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-block create-account">Enviar</button>
                    </div>
                </form>
                {{-- <div class="social-media">
                    <h5>Visitanos</h5>
                    <div class="social-icons">
                        <a href="#"><i class="icon-social-facebook" title="Facebook"></i></a>
                        <a href="#"><i class="icon-social-google" title="Google"></i></a>
                        <a href="#"><i class="icon-social-twitter" title="Twitter"></i></a>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</div>

