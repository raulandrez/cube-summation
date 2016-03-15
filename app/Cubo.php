<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cubo extends Model
{
    protected $N;
    protected $datos;  
    
    public   function SetN(array $data = array())
    {
        $this->N=$data['N'];
        if(1<= $this->N && $this->N<=100){            
            $this->datos=array_fill(0,$this->N+1,array_fill(0,$this->N+1,array_fill(0,$this->N+1,0)));           
        }
    }
    public  function actualizar(array $attributes = Array())
    {
        if (1<= $attributes['x'] && $attributes['x'] <= $this->N && 1<= $attributes['y'] && $attributes['y'] <= $this->N && 1<= $attributes['z'] && $attributes['z'] <= $this->N)
        {
            $attributes['w'] = (double)$attributes['w'] ;
            if (-1000000000 <= $attributes['w'] &&  $attributes['w'] <= 1000000000)
            {
                $this->datos[$attributes['x'] ][$attributes['y'] ][$attributes['z'] ]=$attributes['w'] ;                
            }            
        }
    }
    public  function  subselect( $x1,  $y1 , $z1 ,  $x2,  $y2 , $z2 )
    {
        $suma=(double)0;
        if( 1<= $x1 && $x1 <= $x2 && $x2 <= $this->N  && 1<= $y1 && $y1 <= $y2 && $y2 <= $this->N  && 1<= $z1 && $z1 <= $z2 && $z2 <= $this->N  )
        { 
            for( $x=$x1;$x<=$x2;$x++)
            {
                for( $y=$y1;$y<=$y2;$y++)
                {
                    for( $z=$z1;$z<=$z2;$z++)
                    {
                        $suma+=$this->datos[$x][$y][$z];
                    }                           
                }  
            }
            return $suma;            
        }       
    }    
}
?>