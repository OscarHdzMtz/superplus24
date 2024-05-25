 {{-- POLITICAS DE PRIVACIDAD --}}
 <div class="modal fade modal fade politica" id="modalPoliticaPrivacidad" tabindex="-1" role="dialog"
 aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
 <div class="modal-dialog modal-xl">
     <div class="modal-content">
         <div class="modal-header">
             {{-- <h5 class="text-center modal-title" id="exampleModalCenterTitle">POLITICA DE PRIVACIDAD</h5> --}}
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
             </button>
         </div>
         <div class="principal">
             <div data-aos="fade-up" class="container_cards">
                 <div class="row_cards text-justify">
                     @foreach ($politicaprivacidad as $politica)
                        <h5>{!!$politica->texto!!}</h5>
                     @endforeach
                 </div>                        
             </div>
         </div>
         <div class="modal-footer">
             <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>                    
           </div>              
     </div>
 </div>  
</div>