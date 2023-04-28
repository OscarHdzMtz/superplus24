<?php

namespace App\Http\Livewire\PromocionesLivewire;

use App\Models\Publicoferts;
use App\Models\Categorias;
use Livewire\Component;
use Carbon\Carbon;
class Index extends Component
{
    public $search;
 
    protected $queryString = ['search'];
    public $categoriaBuscar = '';
    public function render()
    {
        $actualInicio = Carbon::today();
        $actualFin = Carbon::yesterday();

        $prueba = $this->categoriaBuscar;

        $consulataBDCategorias = Publicoferts::where('fechaInicio', '<=', $actualInicio)
                                ->where('fechaFin', '>', $actualFin)
                                ->join('categorias', 'publicoferts.categoria_id', '=', 'categorias.id')
                                ->select('categorias.id', 'categorias.name')->get();                                
        $arrayCategoria = $consulataBDCategorias->toArray();

        //ELIMINAMOS LOS ID_CATEGORIA REPETIDOS en el array        
        $categorias = array_unique($arrayCategoria, SORT_REGULAR);    

        $actualInicio = Carbon::today();
        if ($this->categoriaBuscar <> "" && $this->categoriaBuscar <> "FILTRE POR DEPARTAMENTO" && $this->categoriaBuscar <> "TODOS") {
            $promo = Publicoferts::OrderBy('orden', 'ASC')->where('fechaInicio', '<=', $actualInicio)->where('fechaFin', '>', $actualFin)->where('categoria_id', $this->categoriaBuscar)->get();
        }else {
            $promo = Publicoferts::OrderBy('orden', 'ASC')->where('fechaInicio', '<=', $actualInicio)->where('fechaFin', '>', $actualFin)->get();
        }                  

        return view('livewire.promociones-livewire.index', compact('categorias', 'promo'));
    }
}
