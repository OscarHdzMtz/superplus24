@php
    $onlyManual = $onlyManual ?? false;
@endphp

<div id="preloader" style="{{ $onlyManual ? 'display: none;' : '' }}">
    <div class="loader-page-img">
        <div class="loader-page"></div>
        <div id="preloader-text-container" style="text-align: center; margin-top: 15px; width: 100%;">
            <p id="preloader-text" style="color: #003baa; font-weight: 600; font-family: 'Poppins', sans-serif; font-size: 1.1rem; visibility: hidden; margin: 0;">
                Cargando portal de facturación...
            </p>
        </div>
    </div>
</div>

<script>
    (function(){
        var p = document.getElementById('preloader');
        var t = document.getElementById('preloader-text');
        if(!p) return;

        // Función para ocultar (limpia clases y estilos de transición)
        var hidePreloader = function(){
            if(p.style.display !== 'none'){ 
                p.style.transition = 'opacity 0.6s ease'; 
                p.style.opacity = '0'; 
                setTimeout(function(){ 
                    p.style.display = 'none'; 
                    if(t) t.style.visibility = 'hidden';
                }, 600); 
            }
        };

        // Función global para mostrar manualmente (usada en Facturación)
        window.showPreloader = function(text){
            if(p){
                if(t && text){
                    t.innerText = text;
                    t.style.visibility = 'visible';
                }
                p.style.transition = 'none';
                p.style.opacity = '1';
                p.style.display = 'block';
            }
        };

        // Lógica automática (SOLO para Inicio y navegación normal)
        @if(!$onlyManual)
            window.addEventListener('load', hidePreloader);
            document.addEventListener('turbo:load', hidePreloader);
            document.addEventListener('turbo:render', hidePreloader);
            
            // Failsafe
            setTimeout(hidePreloader, 5000);
        @endif

        // Asegurarse de ocultar si se vuelve atrás (Back Button)
        window.addEventListener('pageshow', function(event) {
            if (event.persisted) {
                hidePreloader();
            }
        });
    })();
</script>
