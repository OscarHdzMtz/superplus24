@php
    $onlyManual = $onlyManual ?? false;
@endphp

<div id="preloader" style="{{ $onlyManual ? 'display: none;' : '' }}">
    <div class="loader-page-img">
        <div class="loader-page"></div>
        <div id="preloader-text-container" style="text-align: center; margin-top: 15px; width: 100%;">
            <p id="preloader-text" style="color: #003baa; font-weight: 600; font-family: 'Poppins', sans-serif; font-size: 1.1rem; visibility: hidden;">
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

        var hide = function(){
            if(p.style.display !== 'none'){ 
                p.style.transition = 'opacity 0.6s ease'; 
                p.style.opacity = '0'; 
                setTimeout(function(){ 
                    p.style.display = 'none'; 
                    if(t) t.style.visibility = 'hidden';
                }, 600); 
            }
        };

        @if(!$onlyManual)
            // Solo activar auto-hide si NO es modo manual
            window.addEventListener('load', hide);
            document.addEventListener('turbo:load', hide);
            document.addEventListener('turbo:render', hide);
            
            // Failsafe
            setTimeout(hide, 5000);
        @endif
    })();
</script>
