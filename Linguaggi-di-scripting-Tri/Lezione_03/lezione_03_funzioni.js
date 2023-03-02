// function somma(x, y){
//     var r = x+y;
//     return r;
// }

function somma(){
    let tot = 0;
    let valore;
    console.dir(arguments);
    for (valore of arguments){
        if (typeof valore == "string"){
            tot = tot + parseInt(valore);
        }else {
            tot = tot + valore;
        }
    }
    return tot;

}


let risultato = somma(1,3,4, "54");
console.log(risultato);

function stampaAConsoleIPrimiDieciNumeri(){
    for (let i = 1 ; i <=10 ; i++){
        console.log(i);
    }
}

stampaAConsoleIPrimiDieciNumeri();

// function isNumeroPariODispari(x = 2){
//     let y = x % 2;
//     if ( y === 0){
//         console.log("E' un numero pari");
//     }else{
//         console.log("E' un numero dispari");

//     }    
    
// }

// isNumeroPariODispari(3);



function isNumeroPariODispari2(x){
    // if ( x === null || x ===undefined || typeof x !== "number"){
    if ( x === null || x ===undefined ){
        console.log("il paramentro non è definito, è nullo o non è un numero");
        return false;
    }
    if(typeof x == "string"){
        x = parseInt(x);
    }
    if (typeof x !== "string" && typeof x !== "number"){
        return false;
    }
    if ( x % 2 === 0){
        console.log("E' un numero pari");
        return true;
    }else{
        console.log("E' un numero dispari");
        return false;

    }    
    
}

// isNumeroPariODispari2(1);
// let risultatoN = isNumeroPariODispari2();
// console.log(risultatoN);


function seNumeroPariStampaCiao(){
    let x = prompt();
    // if (isNumeroPariODispari2(parseInt(x))){
    //     console.log("Ciao");
    // }
    if (isNumeroPariODispari2(x)){
        console.log("Ciao");
    }
}

seNumeroPariStampaCiao();