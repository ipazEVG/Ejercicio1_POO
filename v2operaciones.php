<?php
    class operaciones{ // Creamos una clase con cinco funciones: una para ordenar los números y las otras cuatro para realizar las operaciones.
        private function ordenar(&$num1, &$num2){ // Si num1 es menor que num2, usaremos una variable auxiliar para intercambiar los valores y que num1 sea el mayor y num2 el menor. 
            if ($num1 < $num2){
                $aux = $num1;
                $num1 = $num2;
                $num2 = $aux; 
            }else {
                $num1;
                $num2;
            }
        }
        public function suma($num1, $num2){ //Para llamar a la función "ordenar" dentro de la clase "Operaciones", usamos "$this->ordenar($num1, $num2);", lo que accede a la funcion del objeto actual.
            $this-> ordenar($num1, $num2);
            return($num1 + $num2);
        } 
        public function resta($num1, $num2){
            $this-> ordenar($num1, $num2);
            return($num1 - $num2);
        } 
        public function multiplicacion($num1, $num2){
            $this-> ordenar($num1, $num2);
            return($num1 * $num2);
        }
        public function division($num1, $num2){
            $this-> ordenar($num1, $num2);
            return ($num1 / $num2);
        }  
    }
?>