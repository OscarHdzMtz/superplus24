// ---------Responsive-navbar-active-animation-----------
function test(){
  var tabsNewAnim = $('#navbarSupportedContent');
  var activeItemNewAnim = tabsNewAnim.find('.active');

  if (activeItemNewAnim.length === 0) return;

  var activeWidthNewAnimHeight = activeItemNewAnim.innerHeight();
  var activeWidthNewAnimWidth = activeItemNewAnim.innerWidth();
  var itemPosNewAnim = activeItemNewAnim.position();

  if (!itemPosNewAnim) return;

  var selector = $(".hori-selector");
  var isFirstLoad = !selector.hasClass("ready");

  selector.css({
    "top": itemPosNewAnim.top + "px",
    "left": itemPosNewAnim.left + "px",
    "height": activeWidthNewAnimHeight + "px",
    "width": activeWidthNewAnimWidth + "px"
  });

  if (isFirstLoad) {
    selector[0].offsetHeight; // forzar repintado del DOM sin animación
    selector.addClass("ready"); // añadir la clase que habilita transition
  }
}

$(document).ready(function(){
  test();
});

// Soporte Turbo Drive: re-posicionar selector al navegar entre páginas
document.addEventListener('turbo:load', function() {
  test();
});

$(window).on('resize', function(){
  setTimeout(function(){ test(); }, 500);
});

$(".navbar-toggler").click(function(){
  setTimeout(function(){ test(); }, 10);
});

$("#navbarSupportedContent").on("click","li",function(e){
  $('#navbarSupportedContent ul li').removeClass("active");
  $(this).addClass('active');
  test();
});
