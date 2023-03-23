function getDigitNumber(numero){
    if (numero > 999){
       return 4;
   } else {
      if (numero > 99) {
       return 3;
   } else {
        if  (numero >9) {
                return 2;
            }
    }
}
return 1;
}

console.log(getDigitNumber(456));