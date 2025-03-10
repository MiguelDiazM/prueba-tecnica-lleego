<?php
//Ejercicio 1
function reverseLettersInWords($sentence){
    if($sentence==""){
        return "Debes introducir algo";
    } else {
        $sentence = explode(" ", $sentence);
        $reverseSentence = "";
        for($i=0;$i<count($sentence);$i++){
            $reverseSentence .= strrev($sentence[$i]). " ";
        }

        return $reverseSentence;
    }
}

echo reverseLettersInWords("");

?>