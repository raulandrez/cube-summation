<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Cubo;

class TestController extends Controller
{
    function __construct()
    {
       // parent::__construct();
    }
    public function create(){
        return view('entrada');
    }
    public function store(Request $request){       
       $entrada = explode("\n", trim($request->input('entrada')));      
       return view('salida', ['resultado' =>$this->ProcesarDatos($entrada)]);
    }
    private function ProcesarDatos($entrada)
    {
         $IdLinea=0;       
        $T = $entrada[$IdLinea];
        $salida="";
        if (1 <= $T && $T<= 50 )
        { 
            for ($t=0;$t<$T;$t++)
            { 
                $IdLinea++;
                list($N , $M)= explode(" ",$entrada[$IdLinea]);                
                if (1 <= $M && $M<= 1000  )
                {
                    $cubo =   new Cubo;
                    $cubo->SetN(['N' => $N]);
                    for ($m=0;$m<$M;$m++)
                    { 
                        $IdLinea++;
                        $linea = explode(" ",$entrada[$IdLinea]); 
                        switch ($linea[0])
                        {
                            case "UPDATE":
                               $raul=$cubo->actualizar(['x'=>(int)$linea[1],'y'=> (int)$linea[2], 'z'=>(int)$linea[3],'w'=> (double)$linea[4]]);
                            break;
                            case "QUERY":
                                $salida=$salida.$cubo->subselect((int)$linea[1], (int)$linea[2], (int)$linea[3], (int)$linea[4],(int)$linea[5], (int)$linea[6])."<br>";
                            break;                         
                        }      
                    }
                }
            }
        }    
       
        return $salida;
    }
}
