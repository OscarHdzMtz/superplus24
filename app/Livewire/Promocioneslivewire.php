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
        $cat = $this->categoriaBuscar;
        $isAllCategories = empty($cat) || $cat == "FILTRE POR DEPARTAMENTO" || $cat == "TODOS";

        $query = Publicoferts::OrderBy('orden', 'ASC')
            ->where('fechaInicio', '<=', $actualInicio)
            ->where('fechaFin', '>', $actualFin);

        if (!$isAllCategories) {
            $query->where('categoria_id', $cat);
        }

        if ($this->search !== "") {
            $query->where('titulo', 'like', '%' . $this->search . '%');
        }

        $promo = $query->get();

        return view('livewire.promocioneslivewire', compact('categorias', 'promo'));
    }
}
