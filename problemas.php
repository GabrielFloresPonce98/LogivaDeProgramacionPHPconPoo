<?php
class problemas{

    var $horasTrabajador = 0;
    var $tarifaHorario = 0;
    var $tasaDeImpuesto = 0;
    var $mensajeSoluciones="";
    var $distanciaRecorrido = 1500;
    public function ___construct(){
        $this -> horasTrabajador =$horasTrabajador;
        $this -> tarifaHorario =$tarifaHorario;
        $this -> tasaDeImpuesto =$tasaDeImpuesto;
        $this -> mensajeSoluciones = $mensajeSoluciones;
        $this -> distanciaRecorrido = $distanciaRecorrido;
    
    }

    public function horaLaborandoProblema1(){
        $pagoHoras = $this -> gethorasTrabajador() * $this -> gettarifaHorario();
       $this -> mensajeSoluciones .= ((($this-> gettasaDeImpuesto() *$pagoHoras))/(100)."<br>");
    }
    public function operacionesDatos($a,$b){
        $this -> mensajeSoluciones .=  (($a + $b). "  " . ($a - $b) . " " . ($a * $b) ." ". ($a / $b)."<br>");
       
    }
    public function calcularVelocidad($minutos){
        $this -> mensajeSoluciones .= $this -> distanciaRecorrido / ($minutos * 60) . "M/S" . "<br>";

    }
    public function calcularBaseTriangulo($b,$a){
        $this -> mensajeSoluciones .=  ($b*$a)/(2)."<br>";
    }
    public function cambioDeVariables($a,$b){
        $a2=$a;
        $b2=$b;
        $this -> mensajeSoluciones.= "El valor de A es: ". $a . " El valor de B es: ". $b . "<br>";
        $a = $b2;
        $b = $a2; 
        $this -> mensajeSoluciones.= "El valor de A es: ". $a . " El valor de B es: ". $b . "<br>";
    }
    public function calcularMetros($v,$t){
        $this -> mensajeSoluciones.= $v * $t."<br>";

    }
    public function promedio($cal1,$cal2,$cal3){
        $this -> mensajeSoluciones.= ($cal1+$cal2+$cal3)/3 . "<br>";
    }
    public function Encuesta($res1,$res2,$res3,$res4){
        $puntos = 4;
        if($res1 != "A"){
            $puntos--;
        }
        if($res2 != "B"){
            $puntos--;
        }
        if($res3 != "B"){
            $puntos--;
        }
        if($res4 != "C"){
            $puntos--;
        }
        $this -> mensajeSoluciones .= "Tu puntaje es:" .$puntos . "<br>";

    }

    public function serieFibonacci($lim){
        $a = 0;
        $b = 1;
        $c = 0;
        for($i = 0; $i < $lim; $i++){
            $c = $a + $b; 
            $b = $a;
            $a = $c;
           ;

            $this -> mensajeSoluciones .= $c . " "; 
        }
        $this -> mensajeSoluciones .= "<br>"; 
    }
    
    public function factorial($lim){
        $c=1; 
        for($i = 1; $i<=$lim; $i++){
            $c = $c * $i;
            $this -> mensajeSoluciones .= $c . " ";
        }
    }

    


    public function sethorasTrabajador($horasTrabajador){
        $this -> horasTrabajador = $horasTrabajador;
    }
    public function settarifaHorario($tarifaHorario){
        $this -> tarifaHorario = $tarifaHorario;
    }
    public function settasaDeImpuesto($tasaDeImpuesto){
        $this -> tasaDeImpuesto = $tasaDeImpuesto;
    }
    public function setmensajeSoluciones($mensajeSoluciones){
        $this -> mensajeSoluciones = $mensajeSoluciones;
    }
   



    public function gethorasTrabajador(){
        return $this -> horasTrabajador;
       }
    public function gettarifaHorario(){
        return $this -> tarifaHorario;
       }
    public function gettasaDeImpuesto(){
        return $this -> tasaDeImpuesto;
       }
       public function getmensajeSoluciones(){
        return $this -> mensajeSoluciones;
       }

     




}

?>