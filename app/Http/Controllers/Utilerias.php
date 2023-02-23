<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Utilerias extends Controller
{
    public function obtenerMacCliente(){
        $MAC = exec('getmac');
		// Almacenando el valor 'getmac' en $MAC
		// Actualización del valor $MAC usando la función strtok, 
		// strtok se usa para dividir la cadena en tokens
		// el carácter dividido de strtok se define como un espacio
		// porque getmac devuelve el nombre del transporte después
		// Dirección MAC 
		//Nota: este código no funcionará en el IDE en línea, porque ‘getmac’ es un comando CMD. Intente ejecutarlo en localhost.
		$MAC = strtok($MAC, ' ');
        return $MAC;
    }
    function saber_navegador()
    {

        if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false)
            return 'Navegador: Internet explorer';
        elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident') !== false)
            return 'Navegador:  Internet explorer';
        elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox') !== false)
            return 'Navegador:  Mozilla Firefox';
        elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') !== false)
            return 'Navegador: Google Chrome';
        elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mini') !== false)
            return "Navegador: Opera Mini";
        elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'Opera') !== false)
            return "Navegador: Opera";
        elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'Safari') !== false)
            return "Navegador:  Safari";
        else
            return 'Other';
    }

    function IPLocalClientes(){        
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
             $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }
    function getUserIpAddress() {

        foreach ( [ 'HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR' ] as $key ) {
    
            // Comprobamos si existe la clave solicitada en el array de la variable $_SERVER 
            if ( array_key_exists( $key, $_SERVER ) ) {
    
                // Eliminamos los espacios blancos del inicio y final para cada clave que existe en la variable $_SERVER 
                foreach ( array_map( 'trim', explode( ',', $_SERVER[ $key ] ) ) as $ip ) {
    
                    // Filtramos* la variable y retorna el primero que pase el filtro
                    if ( filter_var( $ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE ) !== false ) {
                        return $ip;
                    }
                }
            }
        }
    
        return '?'; // Retornamos '?' si no hay ninguna IP o no pase el filtro
    } 
    }
