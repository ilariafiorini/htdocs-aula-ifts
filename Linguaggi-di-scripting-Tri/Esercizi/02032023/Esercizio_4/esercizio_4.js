//let numero = 3;
function mediaDiArray(array){
    let somma = 0;
    for (numero of array){
        somma = somma + numero;
    }
    return somma/array.length;
}

function stampaMinori(array, valore){
    let listaMinori = "[ ";
    for (candidato of array){
        if (candidato < valore){
            listaMinori = listaMinori + candidato +", ";

        }
        // console.log(listaMinori);
    }
    listaMinori = listaMinori + "]";
    console.log(listaMinori);
}


let a = [3, 5, 10, 2, 8];

stampaMinori(a, mediaDiArray(a));



