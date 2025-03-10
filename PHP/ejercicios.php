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


//Ejercicio 3
class Person{
    private $name;
    private $age;
    private $email;

    /**
	 * TODO: Constructor de persona
	 * @param string name	El nombre de la persona
	 * @param int edad		La edad de la persona
	 * @param string email	El email de la persona
	 */
    public function __construct($name, $age, $email){
        $this -> name = $name;
        $this -> age = $age;
        $this -> email = $email;    
    }

    //Funcion que devuelve los atributos del objeto
    public function showInformation(){
        $information = "Nombre: $this->name, Edad: $this->age, Email: $this->email";
        return $information;
    }

    //Funcion que comprueba si el atributo age y devuelve true si este es mayor o igual a 18, si no devuelve false
    public function isAdult(){
        $adulto = false;
        if($this -> age >= 18){
            $adulto = true;
        } 
        
        //Uso var_export para que devuelve true o false en vez de 1 o nada si es false
        return var_export($adulto);
    }
}

//Ejercicio 4
//TODO: Funcion que comprueba la hora del día y devuelve mañana, tarde o noche
//@return Cadena con la parte del día según la hora actual
function getPartOfDay() {
    //Se guarda en una varible la hora actual del sistema y se le da formato 12h mostrando horas y minutos
    $horaActual = new DateTime("now");
    $horaActual = $horaActual -> format("h:i A");

    //Se transforman las horas a formato UNIX para poder compararlas
    $horaActual = strtotime($horaActual);
    $manana = strtotime("06:00 AM");
    $tarde = strtotime("12:00 PM");
    $noche = strtotime("06:00 PM");

    
    if ($horaActual >= $manana && $horaActual < $tarde) {
        return "Mañana";
    } elseif ($horaActual >= $tarde && $horaActual < $noche) {
        return "Tarde";
    } else {
        return "Noche";
    }
}

echo getPartOfDay();



?>