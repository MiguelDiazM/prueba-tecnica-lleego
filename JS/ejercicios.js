//Ejercicio 1
//TODO: Función que con un array de enteros devuelve un array que contiene los números pares
//@param Array numbers Array que contiene los números para filtrar
//@return Array que contiene los números pares
function arrayPairFilter(numbers){
    let pairNumbers = [];

    //Recorro todo el bucle y voy comparando con el operador modulo para comprobar si el número es par
    for(let i=0; i<numbers.length;i++){
        if(numbers[i]%2===0){
            //Si es par mete ese número en el array de salida
            pairNumbers.push(numbers[i]);
        }
    }

    return pairNumbers;
}

//Ejercicio 2
//TODO: Función que recibe una cadena por parametro y devuelve la misma cadena al reves
//@param String Cadena a la que se le dara la vuelta
//@return String Cadena al reves 
function reverseSentence(sentence){
    let reverseSentence = "";
    //Recorro la cadena al reves desde la longitud de la cadena -1 hasta la primera letra
    for (let i=sentence.length-1;i>=0;i--){
        //Voy concatenando cada letra en la cadena al reves
        reverseSentence+=sentence[i];
    }

    return reverseSentence;
}

//Ejercicio 3
//TODO: Función que recibe un Array por parametro y muestra los valores mientras que no encuentre uno en específico
//@param Array Array que contiene los valores a mostrar
function specificValue(yearMonths){
    let i=0;
    do{
        //Voy mostrando los valores mientras que el siguiente no sea Julio
        console.log(yearMonths[i]);
        i++;

    } while(yearMonths[i] != "Julio")
}

//Ejercicio 4
//TODO: Función que recibe un Array por parametro y devuelve el número de vocales encontradas
//@param String que contiene la frase para buscar las vocales
//@return int que contiene el total de vocales encontradas
function vowelCount(sentence){
    let count=0;
    //Declaro un array con las vocales 
    let vowels = ["a","e","i","o","u"];
    
    //Recorro la cadena y compruebo en cada iteración si la letra esta en el array de vocales   
    for(let i=0;i<sentence.length;i++){
        if(vowels.includes(sentence[i].toLowerCase())){
            count++;
        }
    }

    return count;
}
