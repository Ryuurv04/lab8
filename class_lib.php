<?php
//lab 8.1 basado en 4.1
class mostrar{
    public $ruta="img/";

    public function dame_feliz(){
        return $this->ruta."feliz.png";
    }
    public function dame_serio(){
        return $this->ruta."normal.png";
    }
    public function dame_triste(){
        return $this->ruta."triste.png";
    }
}
//lab 8.2 basado en 4.2

class factoriar{
    public $valor;
    public $facto=1;
    function __construct($valor){
        $this->valor=$valor;
    }
    function calcular(){
        for($i=1;$i<=$this->valor;$i++){
            $this->facto=$i*$this->facto;
        }
        echo "el numero factorial es: ".$this->facto;
    }
}

//lab 8.3 basado en 4.5

class matriz{
    public $tamaño;
    public $unit;
    function __construct($tamaño){
        $this->tamaño=$tamaño;
    }

    function mostrar_matriz(){
        
        $unit =1;
        echo "<table border=1>";
            
         for ($n1=1; $n1<=$this->tamaño; $n1++){
            echo "<tr>";
            
            for($n2=1;$n2<=$this->tamaño;$n2++){   
                if($unit==$n2){
                    echo"<td bgcolor=#bdc3d6>",1,"</td>";
                }
                else{
                    echo "<td>",0,"</td>";
                }
            }  
            $unit = $unit +1;
            echo "</tr>";
        }
        echo "</table>";
    }      
}
?>