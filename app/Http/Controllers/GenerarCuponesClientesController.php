<?php

namespace App\Http\Controllers;

use App\Models\GenerarCuponesClientes;
use App\Models\CrearCupones;
use App\Http\Controllers\Utilerias;
use Carbon\Carbon;
use Hamcrest\DiagnosingMatcher;
use Illuminate\Http\Request;

class GenerarcuponesclientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //        
        $fechaSistema = Carbon::yesterday();   
        $fechaActualSistema  = Carbon::now();
        $cupones = CrearCupones::orderby('id', 'desc')->select('titulo', 'id', 'description', 'image')->where('fechaInicio', '<', $fechaActualSistema)->Where('fechaFin', '>', $fechaSistema)->where('adicional', '=', NULL)->get();
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
        $IPLocalCliente = $utilerias->IPLocalClientes();
        //PRODUCCION
        //$json     = file_get_contents("http://ipinfo.io/$IPLocalCliente/geo");
        //TESTING
        $json     = file_get_contents("http://ipinfo.io/$PublicIP/geo");
        $json     = json_decode($json, true);
        $country  = $json['country'];
        $region   = $json['region'];
        $city     = $json['city'];
        $latLong     = $json['loc'];
        $tipoNavegador = $utilerias->saber_navegador();
        $macCliente = $utilerias->obtenerMacCliente();

        $addCuponGenerado->cupon_id = $id;
        $addCuponGenerado->valorCodigodeBarras = $cuponGenerado;
        $addCuponGenerado->direccionIPPublica = $PublicIP;
        $addCuponGenerado->ciudad = $city;
        $addCuponGenerado->region = $region;
        $addCuponGenerado->pais = $country;
        $addCuponGenerado->latLong = $latLong;
        $addCuponGenerado->direccionMac    = $macCliente;
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
     * @param  \App\Models\GenerarCuponesClientes  $Generarcuponesclientes
     * @return \Illuminate\Http\Response
     */
    public function show(Generarcuponesclientes $Generarcuponesclientes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GenerarCuponesClientes  $Generarcuponesclientes
     * @return \Illuminate\Http\Response
     */
    public function edit(GenerarCuponesClientes $Generarcuponesclientes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GenerarCuponesClientes  $Generarcuponesclientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //        
        $utilerias = new Utilerias();
        $ip_address = file_get_contents('http://checkip.amazonaws.com/');
        //eliminar espacios vacios el inicio y final
        $PublicIP = trim($ip_address);
        $IPLocalCliente = $utilerias->IPLocalClientes();

        $getCrearcupones = Crearcupones::findOrFail($id);
        /* return $getCrearcupones; */
        $nombreCupon = $getCrearcupones->titulo;

        $consultaCuponesGeneradosClientes = GenerarCuponesClientes::where('cupon_id', '=', $id)->get()->toArray();
        /* return $consultaCuponesGeneradosClientes; */
        $CountConsultaCuponesGeneradosClientes = count($consultaCuponesGeneradosClientes);
        for ($buscarIpPublica = 0; $buscarIpPublica < $CountConsultaCuponesGeneradosClientes; $buscarIpPublica++) {
            $IpbuscarBD = $consultaCuponesGeneradosClientes[$buscarIpPublica]['direccionIPPublica'];
            $IpLocalBuscarBD = $consultaCuponesGeneradosClientes[$buscarIpPublica]['direccionIPLocal'];

            $horaActual = Carbon::now()->toTimeString();
            $horaActual = substr($horaActual, 0, 5);
            $fechaActual = Carbon::now()->toDateString();
            $fechaActual = substr($fechaActual, 8, 2);
            $diaSiguente = Carbon::tomorrow();
            $diaSiguenteNew = Carbon::createFromFormat('Y-m-d H:i:s', $diaSiguente)->format('d-m-Y');
            $horaRegistroCupon = substr($consultaCuponesGeneradosClientes[$buscarIpPublica]['created_at'], 11, 5);
            $fechaRegistroCupon = substr($consultaCuponesGeneradosClientes[$buscarIpPublica]['created_at'], 8, 2);
            /* return $fechaRegistroCupon . "_" . $fechaActual . "*" . $consultaCuponesGeneradosClientes[$buscarIpPublica]['created_at']; */
            if ($IPLocalCliente === $IpLocalBuscarBD and $fechaRegistroCupon === $fechaActual) {
                return redirect('cupones')->with('info', 'Podrá adquirir un nuevo cupón el ')->with('nombreCupon', $nombreCupon)->with('diaSiguente', $diaSiguenteNew);
            }
            /* return var_dump($consultaCuponesGeneradosClientes[$buscarIpPublica]['direccionIPPublica']) . " es " . " igual " . $PublicIP; */
            /* return redirect('cupones')->with('info', 'ya fue generado, favor de volver a intentarlo en 00:00:00')->with('nombreCupon', $nombreCupon); */

            if ($IPLocalCliente === $IpLocalBuscarBD and $fechaRegistroCupon <> $fechaActual) {
                $idCuponBorrar = $consultaCuponesGeneradosClientes[$buscarIpPublica]['id'];
                $consultaClienteBorrar = GenerarCuponesClientes::findOrFail($idCuponBorrar);
                $consultaClienteBorrar->delete();
            }
        }
        if ($buscarIpPublica ===  $CountConsultaCuponesGeneradosClientes) {
            $nombreImagenCupon = $getCrearcupones->image;
            //VALIDAMOS SI EL CUPON TIENE UN RANGO PARA ICREMENTAR EL VALOR DEL CONTADOR
            if ($getCrearcupones->finDeRangoGenerarCodigoDeBarras <> "") {

                $finDeRangoGenerarCodigoDeBarras = strlen($getCrearcupones->finDeRangoGenerarCodigoDeBarras);
                $LongContadorCodigoDeBarras = strlen($getCrearcupones->contadorCodigoDeBarras);                
                //GENERAR LOS CEROS PARA EL VALOR INCREMENTAL DE CODIGO DE BARRAS
                if ($LongContadorCodigoDeBarras < $finDeRangoGenerarCodigoDeBarras) {
                    $cantidadDeCerosAgenerar = 0;
                    for ($agregarCero=$LongContadorCodigoDeBarras + 1; $agregarCero < $finDeRangoGenerarCodigoDeBarras; $agregarCero++) { 
                        $cantidadDeCerosAgenerar = $cantidadDeCerosAgenerar . 0;
                    }                    
                $cuponGenerado = $getCrearcupones->valorCodigoDeBarras . $cantidadDeCerosAgenerar . $getCrearcupones->contadorCodigoDeBarras;                   
                }else {
                    $cuponGenerado = $getCrearcupones->valorCodigoDeBarras . $getCrearcupones->contadorCodigoDeBarras;                
                }                       
            }else {
                $cuponGenerado = $getCrearcupones->valorCodigoDeBarras;                   
            }
                $this->create($PublicIP, $cuponGenerado, $id);                          
                //VALIDAMOS EL NUMERO QUE LLEVA INCREMENTNDO EL CONTADOR PARA PONER EXPIRADO A LA COLUMNA ADICIONAL CUANODO LLEGUE AL LIMITE DEL RANGO
                if ($getCrearcupones->contadorCodigoDeBarras < $getCrearcupones->finDeRangoGenerarCodigoDeBarras) {
                    $getCrearcupones->contadorCodigoDeBarras = $getCrearcupones->contadorCodigoDeBarras + 1;
                    $getCrearcupones->update();   
                }elseif ($getCrearcupones->contadorCodigoDeBarras === $getCrearcupones->finDeRangoGenerarCodigoDeBarras){
                    $getCrearcupones->adicional = "expirado";
                    $getCrearcupones->update();
                }

                return redirect('cupones')->with('cupongenerado', $cuponGenerado)->with('nombreCupon', $nombreCupon)->with('nombreImagenCupon', $nombreImagenCupon);
            
        }
        //return " CUPON -- " . $cuponGenerado . " -- GENERADO " . $utilerias->validarDisp() . " CON IP_PUBLICA " .$PublicIP;         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GenerarCuponesClientes  $Generarcuponesclientes
     * @return \Illuminate\Http\Response
     */
    public function destroy(GenerarCuponesClientes $Generarcuponesclientes)
    {
        //
    }
}
