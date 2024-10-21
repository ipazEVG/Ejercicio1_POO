<?php
class operaciones{ // creamos una clase con dos atributos privados, son privados porque solo se van a utilizar desde dentro de la clase. 
    private int $mayor;
    private int $menor;

   function __construct( $num1, $num2){ // Creamos un constructor que se ejecutará automáticamente al instanciar (crear) un objeto. Es importante para asignar el valor mayor en el atributo mayor y el valor menor en el atributo menor.  
    if ($num1<$num2){ // Si se introduce un número menor, se guarda en el atributo menor y el mayor se guarda en el atributo mayor.   
        $this->mayor = $num2;
        $this->menor = $num1;
       
    } else {
        $this->mayor = $num1;
        $this->menor = $num2;
    }
    }
    function suma(){ 
        return $this->mayor + $this->menor;
        
    }
    function resta(){
        return $this->mayor - $this->menor;
    }
    function multiplicacion(){
        return $this->mayor * $this->menor;
    }
    function division(){
        return $this->mayor / $this->menor;
    }
}
?>