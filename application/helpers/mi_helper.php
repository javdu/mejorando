<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    //Nos aseguramos de que no haya conflictos con otras funciones
    if(!function_exists('calculaEdad')){
        function calculaEdad($fecha){
            list($ano,$mes,$dia) = explode("-",$fecha);
            $ano_diferencia  = date("Y") - $ano;
            $mes_diferencia = date("m") - $mes;
            $dia_diferencia   = date("d") - $dia;
            if ($ano_diferencia != 0 and ($dia_diferencia < 0 || $mes_diferencia < 0))
            	$ano_diferencia--;
                
            return $ano_diferencia;
        }
    }