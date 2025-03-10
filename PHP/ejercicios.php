<?php
//Ejercicio 1
//TODO: Funcion que al pasarle una cadena por parametro devuelve esta cadena pero con las letras de cada palabra al reves
//@param string $sentence Parametro que contiene la cadena del usuario para aplicarle la función
//@return string Cadena al reves
function reverseLettersInWords($sentence){
    if($sentence===""){
        return "Debes introducir algo";
    } else {
        //Separo las palabras de la frase usando el explode, convirtiendolas en arrays independientes
        $sentence = explode(" ", $sentence);
        $reverseSentence = "";
        for($i=0;$i<count($sentence);$i++){
            //Uso la funcion strrev que le da la vuelta a cada cadena independiente sobre cada array y lo concateno a la variable que contiene la cadena al reves
            $reverseSentence .= strrev($sentence[$i]). " ";
        }
        
        return $reverseSentence;
    }
}

//Ejercicio 2
//TODO: Funcion que recibe un array de enteros y devuelve el número mas grande
//@param Array $numbers Array sobre el que se va a aplicar la función
//@return int Devuelve el número mas grande del array
function findLargestNumber($numbers) {
    if(count($numbers)===0){
        return "El array no puede estar vacio";
    } else {
        $mayor=$numbers[0];
        for($i=1;$i<count($numbers);$i++){
            if($numbers[$i]>$mayor){
                $mayor = $numbers[$i];
            }
        }

        return $mayor;
    }
}





?>