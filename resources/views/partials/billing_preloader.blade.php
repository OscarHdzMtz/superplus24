<div id="billing-preloader" data-turbo-cache="false" style="display: none; position: fixed; z-index: 25000; background: rgb(255, 255, 255); top: 0; left: 0; width: 100%; height: 100%;">
    <div class="loader-page-img">
        <div class="loader-page"></div>
        <div style="text-align: center; margin-top: 15px; width: 100%;">
            <p style="color: #003baa; font-weight: 600; font-family: 'Poppins', sans-serif; font-size: 1.1rem; margin: 0;">
                Cargando portal de facturación...
            </p>
        </div>
    </div>
</div>

<script>
    (function(){
        // Función global específica para facturación
        window.showBillingPreloader = function(){
            console.log("Activando preloader de facturación...");
            var bp = document.getElementById('billing-preloader');
            if(bp){
                bp.style.transition = 'none';
                bp.style.opacity = '1';
                bp.style.display = 'block';
                console.log("Preloader mostrado correctamente.");
            } else {
                console.error("No se encontró el elemento #billing-preloader");
            }
        };

        // Ocultar si se vuelve atrás (Back Button) o al cargar de nuevo la página
        var hideBillingPreloader = function(){
            var bp = document.getElementById('billing-preloader');
            if(bp && bp.style.display !== 'none'){
                console.log("Ocultando preloader...");
                bp.style.display = 'none';
            }
        };

        window.addEventListener('pageshow', function(event) {
            console.log("Evento pageshow detectado, persistido:", event.persisted);
            if (event.persisted) hideBillingPreloader();
        });
        
        document.addEventListener('turbo:load', hideBillingPreloader);
    })();
</script>
