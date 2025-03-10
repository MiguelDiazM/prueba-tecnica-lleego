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

