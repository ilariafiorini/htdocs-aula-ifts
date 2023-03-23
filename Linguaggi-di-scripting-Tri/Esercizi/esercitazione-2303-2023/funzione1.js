function sommaEMedia(a,b,c,d,e){
    var somma = a+b+c+d+e;
    var media = somma/5;
    console.log(" la somma di :"+a+" "+b+" "+c+" "+d+" "+e+" è uguale a "+somma);
    console.log(" la media di :"+a+" "+b+" "+c+" "+d+" "+e+" è uguale a "+media);
    return [somma, media];
}

console.log(sommaEMedia(1,2,3,4,5));