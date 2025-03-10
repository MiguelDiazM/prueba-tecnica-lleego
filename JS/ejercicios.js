function arrayPairFilter(numbers){
    let pairNumbers = [];

    for(let i=0; i<numbers.length;i++){
        if(numbers[i]%2===0){
            pairNumbers.push(numbers[i]);
        }
    }

    return pairNumbers;
}

