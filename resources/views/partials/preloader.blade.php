<div id="preloader">
    <div class="loader-page-img">
        <div class="loader-page"></div>
    </div>
</div>

<script>
    (function(){
        var p = document.getElementById('preloader');
        if(!p) return;

        var hide = function(){
            if(p.style.display !== 'none'){ 
                p.style.transition = 'opacity 0.6s ease'; 
                p.style.opacity = '0'; 
                setTimeout(function(){ 
                    p.style.display = 'none'; 
                }, 600); 
            }
        };

        // Mostrar solo una vez por sesión
        if (sessionStorage.getItem('preloader_shown')) {
            p.style.display = 'none';
        } else {
            window.addEventListener('load', hide);
            document.addEventListener('turbo:load', hide);
            document.addEventListener('turbo:render', hide);
            setTimeout(hide, 5000);
            sessionStorage.setItem('preloader_shown', '1');
        }
    })();
</script>
