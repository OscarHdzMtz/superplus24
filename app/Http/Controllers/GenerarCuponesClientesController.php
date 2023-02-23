<?php

namespace App\Http\Controllers;

use App\Models\GenerarCuponesClientes;
use App\Models\CrearCupones;
use App\Http\Controllers\Utilerias;
use Illuminate\Http\Request;

class GenerarCuponesClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $cupones = CrearCupones::orderby('id', 'desc')->select('titulo','id','description', 'image')->get();
        /* return $cupones; */        
        return view('cupones', compact('cupones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($PublicIP, $cuponGenerado, $id)
    {
        //
        $addCuponGenerado = new GenerarCuponesClientes();
        $utilerias = new Utilerias();
        $json     = file_get_contents("http://ipinfo.io/$PublicIP/geo");		
		$json     = json_decode($json, true);		
		$country  = $json['country'];		
		$region   = $json['region'];		
		$city     = $json['city'];
		$latLong     = $json['loc'];
        $tipoNavegador = $utilerias->saber_navegador();
        $macCliente = $utilerias->obtenerMacCliente();
        $IPLocalCliente = $utilerias->IPLocalClientes();

        $addCuponGenerado->cupon_id = $id;
        $addCuponGenerado->valorCodigodeBarras = $cuponGenerado;
        $addCuponGenerado->direccionIPPublica = $PublicIP;
        $addCuponGenerado->ciudad =$city;
        $addCuponGenerado->region = $region;
        $addCuponGenerado->pais = $country;
        $addCuponGenerado->latLong = $latLong;
        $addCuponGenerado->direccionMac	= $macCliente;
        $addCuponGenerado->tipoNavegador = $tipoNavegador;
        $addCuponGenerado->direccionIPLocal = $IPLocalCliente;
        $addCuponGenerado->save();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {
          //                
         
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GenerarCuponesClientes  $generarCuponesClientes
     * @return \Illuminate\Http\Response
     */
    public function show(GenerarCuponesClientes $generarCuponesClientes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GenerarCuponesClientes  $generarCuponesClientes
     * @return \Illuminate\Http\Response
     */
    public function edit(GenerarCuponesClientes $generarCuponesClientes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GenerarCuponesClientes  $generarCuponesClientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $utilerias = new Utilerias();        
        $getcrearCupones = CrearCupones::findOrFail($id);
        $consultaCuponesGeneradosClientes = GenerarCuponesClientes::all();
        
        $ip_address = file_get_contents('http://checkip.amazonaws.com/');
		//eliminar espacios vacios el inicio y final
		$PublicIP = trim($ip_address);
        

        if ($getcrearCupones->contadorCodigoDeBarras <= $getcrearCupones->finDeRangoGenerarCodigoDeBarras) {
            $cuponGenerado = $getcrearCupones->valorCodigoDeBarras . $getcrearCupones->contadorCodigoDeBarras;
            $this->create($PublicIP, $cuponGenerado, $id);
            $getcrearCupones->contadorCodigoDeBarras = $getcrearCupones->contadorCodigoDeBarras + 1;
            $getcrearCupones->update();  
        } else {
            $cuponGenerado = "Ya no hay cupones por generar";
        };
        
      
        return "CUPON -- " . $cuponGenerado . " -- GENERADO"; 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GenerarCuponesClientes  $generarCuponesClientes
     * @return \Illuminate\Http\Response
     */
    public function destroy(GenerarCuponesClientes $generarCuponesClientes)
    {
        //
    }
}
