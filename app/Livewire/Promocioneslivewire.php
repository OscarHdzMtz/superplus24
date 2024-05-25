<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Publicoferts;
use App\Models\Categorias;
use Carbon\Carbon;

class Promocioneslivewire extends Component
{    
    public $search = '';
    public $title = '';
    public $categoriaBuscar = '';
    /* protected $queryString = ['search']; */    
    public function render()
    {
        $actualInicio = Carbon::today();
        $actualFin = Carbon::yesterday();

        $prueba = $this->categoriaBuscar;
        $searchprueba = $this->search;
        $consulataBDCategorias = Publicoferts::where('fechaInicio', '<=', $actualInicio)
                                ->where('fechaFin', '>', $actualFin)
                                ->join('categorias', 'publicoferts.categoria_id', '=', 'categorias.id')
                                ->select('categorias.id', 'categorias.name')->get();                                
        $arrayCategoria = $consulataBDCategorias->toArray();

        //ELIMINAMOS LOS ID_CATEGORIA REPETIDOS en el array        
        $categorias = array_unique($arrayCategoria, SORT_REGULAR);           
        $actualInicio = Carbon::today();
        if ($this->categoriaBuscar <> "" && $this->categoriaBuscar <> "FILTRE POR DEPARTAMENTO" && $this->categoriaBuscar <> "TODOS" && $this->search == "") {
            $promo = Publicoferts::OrderBy('orden', 'ASC')->where('fechaInicio', '<=', $actualInicio)->where('fechaFin', '>', $actualFin)->where('categoria_id', $this->categoriaBuscar)->get();
        }elseif($this->search <> "" && $this->categoriaBuscar == null || $this->categoriaBuscar == 'TODOS'){
            $promo = Publicoferts::OrderBy('orden', 'ASC')->where('fechaInicio', '<=', $actualInicio)->where('fechaFin', '>', $actualFin)->where('titulo', 'like', '%' . $this->search . '%')->get();
        }
        elseif($this->search <> "" && $this->categoriaBuscar <> null){
            $promo = Publicoferts::OrderBy('orden', 'ASC')->where('fechaInicio', '<=', $actualInicio)->where('fechaFin', '>', $actualFin)->where('categoria_id', $this->categoriaBuscar)->where('titulo', 'like', '%' . $this->search . '%')->get();
        }
        else {
            $promo = Publicoferts::OrderBy('orden', 'ASC')->where('fechaInicio', '<=', $actualInicio)->where('fechaFin', '>', $actualFin)->get();
        }                  

        return view('livewire.promocioneslivewire', compact('categorias', 'promo'));
    }
}
